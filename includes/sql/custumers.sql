CREATE TABLE `gers_garage`.`customers` (
     `user_id` INT(100) NOT NULL AUTO_INCREMENT , 
     `user_name` VARCHAR NOT NULL , 
     `user_email` VARCHAR NOT NULL , 
     `user_phone` INT(10) NOT NULL , 
     `user_pwd` VARCHAR(100) NOT NULL , 
     `user_booking` VARCHAR NOT NULL , 
     `user_car_make` VARCHAR NOT NULL , 
     `user_car_engine` VARCHAR NOT NULL , 
     PRIMARY KEY (`user_id`)) ENGINE = InnoDB;