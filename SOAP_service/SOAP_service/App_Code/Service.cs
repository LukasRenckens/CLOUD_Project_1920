using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;
//Voor database
using System.Data;
using System.Data.SqlClient;


// NOTE: You can use the "Rename" command on the "Refactor" menu to change the class name "Service" in code, svc and config file together.
public class Service : IService
{
    private List<Menu> weekmenu = new List<Menu>();
    private List<Dagsoep> daglist = new List<Dagsoep>();
    private List<Hoofdgerecht> hoofdlist = new List<Hoofdgerecht>();
    private List<Nagerecht> nalist = new List<Nagerecht>();

    public List<Hoofdgerecht> GetHoofdgerechts()
    {
        string connectionString = "Data Source=prjcloudserver.database.windows.net;Initial Catalog=CLOUD_Database;User ID=lukas;Password=#CLOUD_project;Connect Timeout=60;Encrypt=True;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        SqlConnection connection = new SqlConnection(connectionString);
        SqlCommand command = new SqlCommand("SELECT * FROM Hoofdgerecht", connection);
        connection.Open();
        SqlDataReader datareader = command.ExecuteReader();
        while (datareader.Read())
        {
            Hoofdgerecht h = new Hoofdgerecht();
            h.id = int.Parse(datareader[0].ToString());
            h.vlees = datareader[1].ToString();
            h.groenten = datareader[2].ToString();
            h.aardappelen = datareader[3].ToString();
            hoofdlist.Add(h);
        }
        datareader.Close();
        connection.Close();

        return hoofdlist;
    }
    public List<Dagsoep> GetDagsoeps()
    {
        string connectionString = "Data Source=prjcloudserver.database.windows.net;Initial Catalog=CLOUD_Database;User ID=lukas;Password=#CLOUD_project;Connect Timeout=60;Encrypt=True;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        SqlConnection connection = new SqlConnection(connectionString);
        SqlCommand command = new SqlCommand("SELECT * FROM Dagsoep", connection);
        connection.Open();
        SqlDataReader datareader = command.ExecuteReader();
        while (datareader.Read())
        {
            Dagsoep d = new Dagsoep();
            d.id = int.Parse(datareader[0].ToString());
            d.dagsoep = datareader[1].ToString();
            daglist.Add(d);
        }
        datareader.Close();
        connection.Close();

        return daglist;
    }
    public List<Nagerecht> GetNagerechts()
    {
        string connectionString = "Data Source=prjcloudserver.database.windows.net;Initial Catalog=CLOUD_Database;User ID=lukas;Password=#CLOUD_project;Connect Timeout=60;Encrypt=True;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        SqlConnection connection = new SqlConnection(connectionString);
        SqlCommand command = new SqlCommand("SELECT * FROM Nagerecht", connection);
        connection.Open();
        SqlDataReader datareader = command.ExecuteReader();
        while (datareader.Read())
        {
            Nagerecht n = new Nagerecht();
            n.id = int.Parse(datareader[0].ToString());
            n.nagerecht = datareader[1].ToString();;
            nalist.Add(n);
        }
        datareader.Close();
        connection.Close();

        return nalist;
    }
    public List<Menu> GetWeekmenu()
    {
        Random rand = new Random();
        daglist = GetDagsoeps();
        hoofdlist = GetHoofdgerechts();
        nalist = GetNagerechts();

        for (int i = 0; i < 5; i++)
        {
            Menu menu = new Menu(daglist[rand.Next(1, daglist.Count)], hoofdlist[rand.Next(1, hoofdlist.Count)], nalist[rand.Next(1, nalist.Count)]);
            weekmenu.Add(menu);
        }

        return weekmenu;
    }
    public Menu GetDagmenu()
    {
        DateTime today = DateTime.Today;

        if (!weekmenu.Any())
        {
            weekmenu = GetWeekmenu();
        }

        if (((int)(today.DayOfWeek)) > 5) return new Menu();
        else return weekmenu[(int)(today.DayOfWeek)];
    }

    public string GetData(int value)
	{
		return string.Format("You entered: {0}", value);
	}

	public CompositeType GetDataUsingDataContract(CompositeType composite)
	{
		if (composite == null)
		{
			throw new ArgumentNullException("composite");
		}
		if (composite.BoolValue)
		{
			composite.StringValue += "Suffix";
		}
		return composite;
	}
}
