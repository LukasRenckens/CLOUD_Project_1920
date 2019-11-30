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



// NOTE: You can use the "Rename" command on the "Refactor" menu to change the interface name "IService" in both code and config file together.
[ServiceContract]
public interface IService
{

    [OperationContract]
    string GetData(int value);

    [OperationContract]
    CompositeType GetDataUsingDataContract(CompositeType composite);

    [OperationContract]
    List<Hoofdgerecht> GetHoofdgerechts();
    [OperationContract]
    List<Dagsoep> GetDagsoeps();
    [OperationContract]
    List<Nagerecht> GetNagerechts();
    [OperationContract]
    List<Menu> GetWeekmenu();
    [OperationContract]
    Menu GetDagmenu();


}

// Use a data contract as illustrated in the sample below to add composite types to service operations.
[DataContract]
public class CompositeType
{
    bool boolValue = true;
    string stringValue = "Hello ";

    [DataMember]
    public bool BoolValue
    {
        get { return boolValue; }
        set { boolValue = value; }
    }

    [DataMember]
    public string StringValue
    {
        get { return stringValue; }
        set { stringValue = value; }
    }
}
[DataContract]
public class Menu
{
    [DataMember]
    public Dagsoep dagsoep { get; set; }
    [DataMember]
    public Hoofdgerecht hoofdgerecht { get; set; }
    [DataMember]
    public Nagerecht nagerecht { get; set; }

    public Menu() { }
    public Menu(Dagsoep d, Hoofdgerecht h, Nagerecht n)
    {
        this.dagsoep = d;
        this.hoofdgerecht = h;
        this.nagerecht = n;
    }
}
[DataContract]
public class Dagsoep
{
    [DataMember]
    public int id { get; set; }
    [DataMember]
    public string dagsoep { get; set; }

}
[DataContract]
public class Hoofdgerecht
{
    [DataMember]
    public int id { get; set; }
    [DataMember]
    public string vlees { get; set; }
    [DataMember]
    public string groenten { get; set; }
    [DataMember]
    public string aardappelen { get; set; }
}
[DataContract]
public class Nagerecht
{
    [DataMember]
    public int id { get; set; }
    [DataMember]
    public string nagerecht { get; set; }
}