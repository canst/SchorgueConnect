SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema schorgue
-- -----------------------------------------------------
DROP SCHEMA  IF EXISTS `schorgue` ;

-- -----------------------------------------------------
-- database schorgue
-- -----------------------------------------------------
CREATE SCHEMA  IF NOT EXISTS `schorgue` ;
USE `schorgue` ;

-- -----------------------------------------------------
-- Table `schorgue`.`teacher`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`teacher` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`teacher` (
  `teacher_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `address_id` SMALLINT UNSIGNED NOT NULL,
  `picture` BLOB NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT TRUE,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(40) BINARY NULL DEFAULT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`teachers_id`),
  INDEX `idx_fk_address_teacher` (`address_id` ASC),
  CONSTRAINT `fk_address_teacher`
    FOREIGN KEY (`address_id`)
    REFERENCES `schorgue`.`address` (`address_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`classroom`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`classroom` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`classroom` (
  `classroom_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `year` DATE NOT NULL,
  `teacher_id` INT UNSIGNED NOT NULL ,
  `grade_id` INT UNSIGNED NOT NULL ,
  `section` VARCHAR(2) NOT NULL,
  `status` BOOLEAN,
  `remarks` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`classroom_id`),
  INDEX `idx_fk_teacher_classroom` (`teacher_id` ASC),
  INDEX `idx_fk_classroom_grade` (`grade_id` ASC),
  CONSTRAINT `fk_teacher_classroom`
    FOREIGN KEY (`teacher_id`)
    REFERENCES `schorgue`.`teacher` (`teacher_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
  CONSTRAINT `fk_classroom_grade`
    FOREIGN KEY (`grade_id`)
    REFERENCES `schorgue`.`grade` (`grade_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)

ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`grade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`grade` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`grade` (
  `grade_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `year` DATE NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `desc` VARCHAR(45),
 PRIMARY KEY (`grade_id`),
 INDEX `idx_fk_grade_classroom` (`classroom_id` ASC),
  CONSTRAINT `fk_grade_classroom`
    FOREIGN KEY (`classroom_id`)
    REFERENCES `schorgue`.`classroom` (`classroom_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `schorgue`.`course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`course` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`course` (
  `course_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `descp` VARCHAR(45),
  `grade_id` INT UNSIGNED,
  PRIMARY KEY (`course_id`),
  INDEX `idx_fk_grade_classroom` (`classroom_id` ASC),
  CONSTRAINT `fk_grade_classroom`
    FOREIGN KEY (`classroom_id`)
    REFERENCES `schorgue`.`classroom` (`classroom_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`results`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`results` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`results` (
  `exam_id` INT UNSIGNED ,
  `student_id` INT UNSIGNED ,
  `courses_id` INT UNSIGNED,
  `marks` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`course_id`),
  INDEX `idx_fk_exam_results` (`exam_id` ASC),
  INDEX `idx_fk_student_results` (`student_id` ASC),
  INDEX `idx_fk_course_results` (`course_id` ASC),
  CONSTRAINT `fk_exam_results`
    FOREIGN KEY (`exam_id`)
    REFERENCES `schorgue`.`exam` (`exam_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
  CONSTRAINT `fk_student_results`
    FOREIGN KEY (`student_id`)
    REFERENCES `schorgue`.`student` (`student_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
  CONSTRAINT `fk_course_results`
    FOREIGN KEY (`courses_id`)
    REFERENCES `schorgue`.`course` (`courses_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`exam`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`exam` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`exam` (
  `exam_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `exam_type_id` INT UNSIGNED ,
  `name` VARCHAR(45) NOT NULL,
  `start_date` DATETIME,
  PRIMARY KEY (`exam_id`),
  INDEX `idx_fk_exam_type_exam` (`exam_type_id` ASC),
   CONSTRAINT `fk_exam_results`
    FOREIGN KEY (`exam_type_id`)
    REFERENCES `schorgue`.`exam_type` (`exam_type_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`exam_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`exam_type` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`exam_type` (
  `exam_type_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `desc` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`exam_type_id`),
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`attendance` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`attendance` (
  `date` DATE,
  `student_id` INT UNSIGNED ,
  `status` BOOLEAN,
  `remark` TEXT,
INDEX `idx_fk_student_id` (`student_id` ASC),
CONSTRAINT `fk_student_id`
    FOREIGN KEY (`student_id`)
    REFERENCES `schorgue`.`student` (`student_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

    
-- -----------------------------------------------------
-- Table `schorgue`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`student` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`student` (
  `student_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `dob` DATE,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `password` VARCHAR(50) NULL DEFAULT NULL,
  `phone` VARCHAR(12) NULL DEFAULT NULL,
  `address_id` INT UNSIGNED,
  `status` BOOLEAN,
  `date_of_join` DATE,
  `parent_id` INT, 
  `last_login_date` DATETIME,
  `last_login_ip` VARCHAR(45),
  `last_updated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`),
  INDEX `idx_fk_parent_id` (`parent_id` ASC),
  INDEX `idx_fk_address_id` (`address_id` ASC),
    CONSTRAINT `fk_parent_id`
    FOREIGN KEY (`parent_id`)
    REFERENCES `schorgue`.`parent` (`parent_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `address_id`
    FOREIGN KEY (`address_id`)
    REFERENCES `schorgue`.`address` (`address_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'Table storing all students. Holds foreign keys to the address table. \n\nBasic information about the students like first and last name are stored in the table itself. Same for the date the record was created and when the information was last updated.';

    
-- -----------------------------------------------------
-- Table `schorgue`.`parent`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`parent` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`parent` (
  `parent_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `dob` DATE,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `password` VARCHAR(50) NULL DEFAULT NULL,
  `phone` VARCHAR(12) NULL DEFAULT NULL,
  `address_id` INT UNSIGNED,
  `status` BOOLEAN,
  `last_login_date` DATETIME,
  `last_login_ip` VARCHAR(45),
  PRIMARY KEY (`parent_id`),
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `schorgue`.`address`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`address` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`address` (
  `address_id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(50) NOT NULL,
  `address2` VARCHAR(50) NULL DEFAULT NULL,
  `district` VARCHAR(20) NOT NULL,
  `city_id` SMALLINT UNSIGNED NOT NULL,
  `postal_code` VARCHAR(10) NULL DEFAULT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`address_id`),
  INDEX `idx_fk_city_id` (`city_id` ASC),
  CONSTRAINT `fk_address_city`
    FOREIGN KEY (`city_id`)
    REFERENCES `schorgue`.`city` (`city_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `schorgue`.`city`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`city` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`city` (
  `city_id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` VARCHAR(50) NOT NULL,
  `country_id` SMALLINT UNSIGNED NOT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`city_id`),
  INDEX `idx_fk_country_id` (`country_id` ASC),
  CONSTRAINT `fk_city_country`
    FOREIGN KEY (`country_id`)
    REFERENCES `schorgue`.`country` (`country_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sakila`.`country`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `schorgue`.`country` ;

CREATE TABLE IF NOT EXISTS `schorgue`.`country` (
  `country_id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` VARCHAR(50) NOT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`country_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;