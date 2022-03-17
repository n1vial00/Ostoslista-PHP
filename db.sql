CREATE database shoppinglist;

use shoppinglist;

CREATE table item (
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255) NOT NULL,
    amount SMALLINT UNSIGNED NOT NULL
);

INSERT INTO item (description, amount) values ('Test item',1);
