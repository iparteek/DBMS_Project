SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";

-- Table structures


CREATE TABLE `student_details` (
  `id`          int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name`        text NOT NULL,
  `gender`      text NOT NULL,
  `blood-grp`   text NOT NULL,
  `dob`         text NOT NULL,
  `mob1`        int(10) NOT NULL,
  `mob2`        int(10) NOT NULL,
  `email`       text NOT NULL,
  `aadhar`      int(12) NOT NULL,
  `f_name`      text NOT NULL,
  `f_occ`       text NOT NULL,
  `m_name`      text NOT NULL,
  `m_occ`       text NOT NULL,
  `branch`      text NOT NULL,
  `religion`    text NOT NULL,
  `disability`  text NOT NULL

);

CREATE TABLE `mhtcet_details` (
  `id`                        int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `MHTCET-round`                 int(2) NOT NULL,
  `MHTCET-roll`                  int(12) NOT NULL,
  `MHTCET-rank`                  int(10) NOT NULL,
  `MHTCET-mark`                  int(3) NOT NULL,
  `MHTCET-score`                 int(3) NOT NULL,
  `MHTCET-year`                  int(4) NOT NULL,
  `allotment-category`        char(3) NOT NULL,
  `candidate-category`        char(3) NOT NULL

);

CREATE TABLE `fees_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fees-no-1`                int(10) NOT NULL,              
  `fees-date-1`              text NOT NULL,
  `fees-amt-1`               int(6) NOT NULL,
  `fees-no-2`                int(10) NOT NULL,
  `fees-date-2`              text NOT NULL,
  `fees-amt-2`               int(6) NOT NULL

);

CREATE TABLE `hostel_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `hostel-req`               char(3) NOT NULL,
  `encl-1`                   char(3) NOT NULL,
  `encl-2`                   char(3) NOT NULL,
  `encl-3`                   char(3) NOT NULL,
  `encl-4`                   char(3) NOT NULL,
  `encl-5`                   char(3) NOT NULL,
  `encl-6`                   char(3) NOT NULL,
  `encl-7`                   char(3) NOT NULL,
  `encl-8`                   char(3) NOT NULL,
  `encl-9`                   char(3) NOT NULL,
  `encl-10`                  char(3) NOT NULL,
  `encl-11`                  char(3) NOT NULL,
  `encl-12`                  char(3) NOT NULL,
  `encl-13`                  char(3) NOT NULL,
  `encl-14`                  char(3) NOT NULL

);

CREATE TABLE `address_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `add-1`                    text NOT NULL,
  `add-city-1`               text NOT NULL,
  `add-state-1`              text NOT NULL,
  `add-pincode-1`            int(6) NOT NULL,
  `add-mob-1`                int(10) NOT NULL,
  `add-2`                    text NOT NULL,
  `add-city-2`               text NOT NULL,
  `add-state-2`              text NOT NULL,
  `add-pincode-2`            int(6) NOT NULL,
  `add-mob-2`                int(10) NOT NULL

);

CREATE TABLE `education_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ed-board-1`               text NOT NULL,
  `ed-sub-1`                 text NOT NULL,
  `ed-year-1`                int(4) NOT NULL,
  `ed-marks-1`               int(3) NOT NULL,
  `ed-grade-1`               text NOT NULL,
  `ed-board-2`               text NOT NULL,
  `ed-sub-2`                 text NOT NULL,
  `ed-year-2`                int(4) NOT NULL,
  `ed-marks-2`               int(3) NOT NULL,
  `ed-grade-2`               text NOT NULL

);

CREATE TABLE `education_details_2` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `file-1`                   char(3) NOT NULL,
  `file-2`                   char(3) NOT NULL,
  `file-3`                   char(3) NOT NULL,
  `file-4`                   char(3) NOT NULL,
  `file-5`                   char(3) NOT NULL,
  `file-6`                   char(3) NOT NULL

);

CREATE TABLE `health_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `disease`                  char(3) NOT NULL,
  `dis-details`              text NOT NULL

);

CREATE TABLE `declaration_details` (
  `id`                       int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date`                     date NOT NULL,
  `sign`                     text NOT NULL

);

--
-- Table structure for table `user`
--
CREATE TABLE `user` (
  `id`         int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email`      text NOT NULL,
  `password`   text NOT NULL
);
CREATE TABLE 'signatures' (
 'id'       int(11) AUTO_INCREMENT PRIMARY KEY,
 'signature_path' CHAR(255) NOT NULL
);

CREATE TABLE 'photos' (
    'id'  int(11) AUTO_INCREMENT PRIMARY KEY,
    'photo_path' CHAR(255) NOT NULL
);


--
-- Dumping data for table `user`
--
INSERT INTO `user` (`id`, `email`, `password`) VALUES (1, 'admin@admin.com', 'admin');
