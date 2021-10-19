-- -----------------------------------------------------
-- Schema schorgue
-- -----------------------------------------------------
DROP DATABASE  IF EXISTS schorgue ;

-- -----------------------------------------------------
-- database schorgue
-- -----------------------------------------------------
CREATE DATABASE  IF NOT EXISTS schorgue ;

-- -----------------------------------------------------
-- Table `schorgue`.`teacher`
-- -----------------------------------------------------
DROP TABLE IF EXISTS teacher ;

CREATE TABLE IF NOT EXISTS teacher (
  teacher_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  address_id SMALLINT UNSIGNED NOT NULL,
  picture BLOB NULL,
  email VARCHAR(50) NULL DEFAULT NULL,
  active TINYINT(1) NOT NULL DEFAULT TRUE,
  username VARCHAR(16) NOT NULL,
  pwd VARCHAR(40) BINARY NULL DEFAULT NULL,
  last_update TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (teacher_id),
  INDEX idx_fk_address_teacher (address_id ASC),
  CONSTRAINT fk_address_teacher
    FOREIGN KEY (address_id)
    REFERENCES address (address_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`classroom`
-- -----------------------------------------------------
DROP TABLE IF EXISTS classroom ;

CREATE TABLE IF NOT EXISTS classroom (
  classroom_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  years DATE NOT NULL,
  teacher_id INT UNSIGNED NOT NULL ,
  grade_id INT UNSIGNED NOT NULL ,
  section VARCHAR(2) NOT NULL,
  status BOOLEAN,
  remarks VARCHAR(45) NOT NULL,
  PRIMARY KEY (classroom_id),
  INDEX idx_fk_teacher_classroom (teacher_id ASC),
  INDEX idx_fk_classroom_grade (grade_id ASC),
  CONSTRAINT fk_teacher_classroom
    FOREIGN KEY (teacher_id)
    REFERENCES teacher (teacher_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT fk_classroom_grade
    FOREIGN KEY (grade_id)
    REFERENCES grade (grade_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);
-- -----------------------------------------------------
-- Table `schorgue`.`grade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS grade ;

CREATE TABLE IF NOT EXISTS grade (
  grade_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  years DATE NOT NULL,
  name VARCHAR(45) NOT NULL,
  classroom_id INT UNSIGNED,
  descpt VARCHAR(45),
 PRIMARY KEY (grade_id),
 INDEX idx_fk_grade_classroom (classroom_id ASC),
  CONSTRAINT fk_grade_classroom
    FOREIGN KEY (classroom_id)
    REFERENCES classroom (classroom_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS course ;

CREATE TABLE IF NOT EXISTS course (
  course_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  descp VARCHAR(45),
  grade_id INT UNSIGNED,
  classroom_id INT UNSIGNED,
  PRIMARY KEY (course_id),
  INDEX idx_fk_grade_classroom (classroom_id ASC),
  CONSTRAINT fk_grade_classroom
    FOREIGN KEY (classroom_id)
    REFERENCES classroom (classroom_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`results`
-- -----------------------------------------------------
DROP TABLE IF EXISTS results ;

CREATE TABLE IF NOT EXISTS results (
  exam_id INT UNSIGNED ,
  student_id INT UNSIGNED ,
  course_id INT UNSIGNED,
  marks VARCHAR(45) NOT NULL,
  INDEX idx_fk_exam_results (exam_id ASC),
  INDEX idx_fk_student_results (student_id ASC),
  INDEX idx_fk_course_results (course_id ASC),
  CONSTRAINT fk_exam_results
    FOREIGN KEY (exam_id)
    	REFERENCES exam (exam_id)
             ON DELETE RESTRICT
             ON UPDATE CASCADE,
  CONSTRAINT fk_student_results
    FOREIGN KEY (student_id)
    	REFERENCES student (student_id)
             ON DELETE RESTRICT
             ON UPDATE CASCADE,
  CONSTRAINT fk_course_results
    FOREIGN KEY (course_id)
        REFERENCES course (course_id)
            ON DELETE RESTRICT
            ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`exam`
-- -----------------------------------------------------
DROP TABLE IF EXISTS exam ;

CREATE TABLE IF NOT EXISTS exam (
  exam_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  exam_type_id INT UNSIGNED ,
  name VARCHAR(45) NOT NULL,
  start_date DATETIME,
  PRIMARY KEY (exam_id),
  INDEX idx_fk_exam_type_exam (exam_type_id ASC),
   CONSTRAINT fk_exam_results
    FOREIGN KEY (exam_type_id)
    REFERENCES exam_type (exam_type_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`exam_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS exam_type ;

CREATE TABLE IF NOT EXISTS exam_type (
  exam_type_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  descp VARCHAR(45) NOT NULL,
  PRIMARY KEY (exam_type_id) );

-- -----------------------------------------------------
-- Table `schorgue`.`attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS attendance ;

CREATE TABLE IF NOT EXISTS attendance (
  Dattendance DATE,
  student_id INT UNSIGNED ,
  statut BOOLEAN,
  remark TEXT,
INDEX idx_fk_student_id (student_id ASC),
CONSTRAINT fk_student_id
    FOREIGN KEY (student_id)
    REFERENCES student (student_id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);

    
-- -----------------------------------------------------
-- Table `schorgue`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS student ;

CREATE TABLE IF NOT EXISTS student (
  student_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  dob DATE,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  email VARCHAR(50) NULL DEFAULT NULL,
  pwd VARCHAR(50) NULL DEFAULT NULL,
  phone VARCHAR(12) NULL DEFAULT NULL,
  address_id INT UNSIGNED,
  statut BOOLEAN,
  date_of_join DATE,
  parent_id INT UNSIGNED, 
  last_login_date DATETIME,
  last_login_ip VARCHAR(45),
  last_updated TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (student_id),
  INDEX idx_fk_parent_id (parent_id ASC),
  INDEX idx_fk_address_id (address_id ASC),
    CONSTRAINT fk_parent_id
    	FOREIGN KEY (parent_id)
            REFERENCES parent (parent_id)
                ON DELETE RESTRICT
                ON UPDATE CASCADE,
    CONSTRAINT address_id
    	FOREIGN KEY (address_id)
    		REFERENCES address (address_id)
                ON DELETE RESTRICT
                ON UPDATE CASCADE);

    
-- -----------------------------------------------------
-- Table `schorgue`.`parent`
-- -----------------------------------------------------
DROP TABLE IF EXISTS parent ;

CREATE TABLE IF NOT EXISTS parent (
  parent_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(45) NOT NULL,
  last_name VARCHAR(45) NOT NULL,
  dob DATE,
  email VARCHAR(50) NULL DEFAULT NULL,
  pwd VARCHAR(50) NULL DEFAULT NULL,
  phone VARCHAR(12) NULL DEFAULT NULL,
  address_id INT UNSIGNED,
  statut BOOLEAN,
  last_login_date DATETIME,
  last_login_ip VARCHAR(45),
  PRIMARY KEY (parent_id));

-- -----------------------------------------------------
-- Table `schorgue`.`address`
-- -----------------------------------------------------
DROP TABLE IF EXISTS address ;

CREATE TABLE IF NOT EXISTS address (
  address_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  address VARCHAR(50) NOT NULL,
  address2 VARCHAR(50) NULL DEFAULT NULL,
  district VARCHAR(20) NOT NULL,
  city_id SMALLINT UNSIGNED NOT NULL,
  postal_code VARCHAR(10) NULL DEFAULT NULL,
  phone VARCHAR(20) NOT NULL,
  last_update TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (address_id),
  INDEX idx_fk_city_id (city_id ASC),
  CONSTRAINT fk_address_city
    FOREIGN KEY (city_id)
   	  REFERENCES city (city_id)
   		 ON DELETE RESTRICT
    	 ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`city`
-- -----------------------------------------------------
DROP TABLE IF EXISTS city ;

CREATE TABLE IF NOT EXISTS city (
  city_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  city VARCHAR(50) NOT NULL,
  country_id SMALLINT UNSIGNED NOT NULL,
  last_update TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (city_id),
  INDEX idx_fk_country_id (country_id ASC),
  CONSTRAINT fk_city_country
    FOREIGN KEY (country_id)
    	REFERENCES country (country_id)
            ON DELETE RESTRICT
            ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table `schorgue`.`country`
-- -----------------------------------------------------
DROP TABLE IF EXISTS country ;

CREATE TABLE IF NOT EXISTS country (
  country_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  country VARCHAR(50) NOT NULL,
  last_update TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (country_id)
);