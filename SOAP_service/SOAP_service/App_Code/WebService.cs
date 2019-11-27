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

    public WebService()
    {

        //Uncomment the following line if using designed components 
        //InitializeComponent(); 
    }

    private String[] fruits = { "apple", "pear", "banana", "grape", "strawberry", "mandarin", "cherry" };
    private String[] soups = {"tomatosoup", "vegetablesoup", "goulash soup", "aspergus soup", "pumpkin soup"};

    public int GetDayOfWeek()
    {
        DateTime today = DateTime.Today;
        return (int)(today.DayOfWeek);
    }

    [WebMethod]
    public string FruitOfTheMonth()
    {
        DateTime today = DateTime.Today;
        return fruits[(int)(today.Month)];
    }

    [WebMethod]
    public string SoupOfTheDay()
    {
        Random rand = new Random();
        
        return soups[rand.Next(5)];
    }


}
