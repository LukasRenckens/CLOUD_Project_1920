using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

/// <summary>
/// Summary description for WebService
/// </summary>
//[WebService(Namespace = "http://tempuri.org/")]
[WebService(Namespace = "http://193.190.58.21")]    //Marcel
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
// [System.Web.Script.Services.ScriptService]
public class WebService : System.Web.Services.WebService
{
    private String[] dagen = { "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag" };
    private Service service = new Service();

    public WebService()
    {
        //Uncomment the following line if using designed components 
        //InitializeComponent(); 
    }
    [WebMethod]
    public string Hello(string h)
    {
        if (Convert.ToInt32(h) == 1) return "Hello 1";
        else return "Hello world!";

    }

    [WebMethod]
    public List<Hoofdgerecht> GetHoofdgerechts()
    {
        return service.GetHoofdgerechts();
    }
    [WebMethod]
    public List<Dagsoep> GetDagsoeps()
    {
        return service.GetDagsoeps();
    }
    [WebMethod]
    public List<Nagerecht> GetNagerechts()
    {
        return service.GetNagerechts();
    }
    [WebMethod]
    public List<Menu> GetWeekMenu()
    {
        return service.GetWeekmenu();
    }
    [WebMethod]
    public Menu GetDagMenu()
    {
        return service.GetDagmenu();
    }
}
