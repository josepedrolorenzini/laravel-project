CREATE TABLE "products_test" (
	 "id" INTEGER PRIMARY KEY AUTOINCREMENT,
	"productName" VARCHAR(356) NULL DEFAULT '0',
	"description" VARCHAR(356) NULL DEFAULT '0',
	"image" VARCHAR(356) NULL DEFAULT '0'
);


CREATE TABLE products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    productName TEXT DEFAULT '0',
    description TEXT DEFAULT '0',
    image TEXT DEFAULT '0'
);


INSERT INTO products (productName, description, image)
VALUES ('react', 'components::facades', 'reACT.jpg') ,
('javascript', 'promises', 'async.jpg')




INSERT INTO product (name, description, price , quantity)


select * from "job_listing"
VALUES ('react', 'components::facades reACT ' , 1000, 9) ,
('javascript', 'promises async.jpg' , 9000 , 1)



CREATE TABLE "job_listings" (
	"id" INTEGER NOT NULL,
	PRIMARY KEY ("id")
)
;
SELECT * FROM "ecommerce".sqlite_master WHERE type IN('table', 'view') AND name NOT LIKE 'sqlite_%';
SELECT * FROM "ecommerce".pragma_table_info('job_listings');
job_listings