CREATE TABLE [dbo].[Menu]
(
	[Id] INT NOT NULL PRIMARY KEY IDENTITY, 
    [Dagsoep] NVARCHAR(50) NOT NULL, 
    [Hoofdgerecht] NVARCHAR(50) NOT NULL, 
    [Nagerecht] NVARCHAR(50) NOT NULL
)
