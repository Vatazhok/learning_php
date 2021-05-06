INSERT INTO `shopping_basket`.`users` ( `name_user`, `email`, `password`)
VALUES ('valery', 'valery@gmail.com', 'qwerty'),
       ('ivan', 'ivan@gmail.com', '0000'),
       ('ira', 'ira@gmail.com', '1111');

INSERT INTO `shopping_basket`.`goods` ( `name`, `price`, `quantity`,`category_id`)
VALUES ('ryzen 1500x', '2400', '140', 1),
       ('msi b450 gaming plus max', '2492', '400', 2),
       ('redmi note 10x', '7500', '269', 4),
       ('msi rx 590', '9000', '9', 3),
       ('ryzen 3600x', '8000', '140', 1);

INSERT INTO `shopping_basket`.`category` ( `name_category`)
VALUES ('cpu'),
       ('motherboard'),
       ('video-card'),
       ('smartphone');

INSERT INTO `shopping_basket`.`shopping_basket` (`goods_id`, `user_id`, `quantity_goods`)
VALUES (1,1,1),
       (4,3,1);



SELECT SUM(`quantity`) as sum_quantity FROM `goods`;

SELECT * FROM `goods` WHERE `quantity` = (SELECT MAX(`quantity`) FROM `goods`);

UPDATE `goods`
SET `quantity` = `quantity` * 2
WHERE
        `quantity` = (
        SELECT
            *
        FROM
            ( SELECT MIN( `quantity` ) FROM `goods` ) AS t);


SELECT
    `name_user`, `name`
FROM
    `shopping_basket`, `users`, `goods`
WHERE
    `shopping_basket`.`user_id` = `users`.`id` AND `shopping_basket`.`goods_id` = `shopping_basket`.`goods`.`id`;