using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
//Voor database
using System.Data;
using System.Data.SqlClient;

/// <summary>
/// Summary description for WebService
/// </summary>
//[WebService(Namespace = "http://tempuri.org/")]
[WebService(Namespace = "http://193.190.58.21")]    //Marcel
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
// [System.Web.Script.Services.ScriptService]
//Source1: https://www.youtube.com/watch?v=9LH-DHwZlYI
//Source2: https://www.youtube.com/watch?v=CJem5eizQtQ
//Source3: https://www.youtube.com/watch?v=plRPBT3h3S8
public class WebService : System.Web.Services.WebService
{
    private String[] dagen = { "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag" };
    private List<Menu> weekmenu = new List<Menu>();
    private List<Dagsoep> daglist = new List<Dagsoep>();
    private List<Hoofdgerecht> hoofdlist = new List<Hoofdgerecht>();
    private List<Nagerecht> nalist = new List<Nagerecht>();

    public WebService()
    {
        //Uncomment the following line if using designed components 
        //InitializeComponent(); 
    }
    [WebMethod]
    public string Hello(int h)
    {
        if (h == 1) return "Hello 1";
        else return "Hello world!";

    }

    [WebMethod]
    public List<Hoofdgerecht> GetHoofdgerechts()
    {
        string connectionString = "Server=tcp:prjcloudserver.database.windows.net,1433;Initial Catalog=CLOUD_Database;Persist Security Info=False;User ID=lukas;Password=#CLOUD_project;MultipleActiveResultSets=False;Encrypt=True;TrustServerCertificate=False;Connection Timeout=30;";
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
    [WebMethod]
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
    [WebMethod]
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
            n.nagerecht = datareader[1].ToString(); ;
            nalist.Add(n);
        }
        datareader.Close();
        connection.Close();

        return nalist;
    }
    [WebMethod]
    public List<Menu> GetWeekMenu()
    {
        Random rand = new Random();
        daglist = GetDagsoeps();
        hoofdlist = GetHoofdgerechts();
        nalist = GetNagerechts();

        if (!weekmenu.Any())
        {
            for (int i = 0; i < 5; i++)
            {
                Menu menu = new Menu(daglist[rand.Next(1, daglist.Count)], hoofdlist[rand.Next(1, hoofdlist.Count)], nalist[rand.Next(1, nalist.Count)]);
                weekmenu.Add(menu);
            }
        }

        return weekmenu;

    }
    [WebMethod]
    public Menu GetDagMenu()
    {
        DateTime today = DateTime.Today;

        if (!weekmenu.Any())
        {
            weekmenu = GetWeekMenu();
        }

        if (((int)(today.DayOfWeek)) > 5) return new Menu();
        else return weekmenu[(int)(today.DayOfWeek)];
    }
}
