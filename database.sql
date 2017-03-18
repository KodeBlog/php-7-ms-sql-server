CREATE DATABASE PHP7CrudExample
GO

CREATE TABLE [items](
    [id] [numeric](18, 0) IDENTITY(1,1) NOT NULL,
    [item] [nvarchar](50) NULL,
    [description] [nvarchar](255) NULL,
    [status] [nvarchar](50) NULL,
    [created_at] [datetime] NULL,
    [updated_at] [datetime] NULL,
    [deleted_at] [datetime] NULL
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[items] ADD  CONSTRAINT [DF_items_status]  DEFAULT ((0)) FOR [status]
GO

INSERT INTO items (item,description,status)
VALUES ('Exercising','Go to the Gym','Not Started')
GO
