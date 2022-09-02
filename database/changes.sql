ALTER TABLE `room` CHANGE `status` `status` INT(11) NOT NULL COMMENT '0 = available / 1 = reserved / 2 = occupied';

ALTER TABLE `reservation` ADD `payment_type` INT NOT NULL COMMENT '1 = Cash / 2 = Card' AFTER `card_id`;

ALTER TABLE `reservation` CHANGE `reservation_type` `reservation_type` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT '1 = Individual / 2 = Block';