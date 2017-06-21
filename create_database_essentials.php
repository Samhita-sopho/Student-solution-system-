<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   // echo 'Connected to sql successfully';

   //Creating and selecting the database for first time entry
   $sql = 'CREATE DATABASE IF NOT EXISTS hackathon';
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   // echo "Database Hackathon created successfully\n";

   mysql_select_db('hackathon');

   //Call for creating tables
   $sql_table_faculty = 'CREATE TABLE IF NOT EXISTS faculty( '.
      'f_id INT NOT NULL, '.
      'f_name VARCHAR(20) NOT NULL, '.
      'f_post VARCHAR(20) NOT NULL, '.
      'phone_number VARCHAR(20), '.
      'primary key (f_id))';
   $retval = mysql_query( $sql_table_faculty, $conn );
   if(! $retval ) {
      die('Could not create table "faculty" : ' . mysql_error());
   }
   // echo "Table faculty created successfully\n";

   $sql_table_login = 'CREATE TABLE IF NOT EXISTS login( '.
      'f_id INT NOT NULL, '.
      'password VARCHAR(20) NOT NULL)';
   $retval = mysql_query( $sql_table_login, $conn );
   if(! $retval ) {
      die('Could not create table "login" : ' . mysql_error());
   }

   $sql_table_student = 'CREATE TABLE IF NOT EXISTS student( '.
      's_id INT NOT NULL, '.
      's_name VARCHAR(20) NOT NULL, '.
      's_branch VARCHAR(20) NOT NULL, '.
      'phone_number VARCHAR(20), '.
      'primary key (s_id))';
   $retval = mysql_query( $sql_table_student, $conn );
   if(! $retval ) {
      die('Could not create table "student" : ' . mysql_error());
   }
   // echo "Table student created successfully\n";

   $sql_table_appointment = 'CREATE TABLE IF NOT EXISTS appointment( '.
      's_id INT NOT NULL, '.
      'f_id INT NOT NULL, '.
      'a_date DATE NOT NULL, '.
      'a_time INT NOT NULL)';
   $retval = mysql_query( $sql_table_appointment, $conn );
   if(! $retval ) {
      die('Could not create table "appointment" : ' . mysql_error());
   }
   // echo "Table appointment created successfully\n";

   $sql_table_schedule = 'CREATE TABLE IF NOT EXISTS schedule( '.
      'f_id INT NOT NULL, '.
      's_date DATE NOT NULL, '.
      'schedule_string VARCHAR(9) NOT NULL)';
   $retval = mysql_query( $sql_table_schedule, $conn );
   if(! $retval ) {
      die('Could not create table "schedule" : ' . mysql_error());
   }
   // echo "Table schedule created successfully\n";

   $sql_table_policy = 'CREATE TABLE IF NOT EXISTS policy( '.
      'p_id INT NOT NULL AUTO_INCREMENT, '.
      'f_id INT NOT NULL, '.
      'p_link VARCHAR(20) NOT NULL, '.
      'primary key (p_id))';
   $retval = mysql_query( $sql_table_policy, $conn );
   if(! $retval ) {
      die('Could not create table "policy" : ' . mysql_error());
   }
   $sql_table_studentlogin = 'CREATE TABLE IF NOT EXISTS studentlogin( '.
      'username INT NOT NULL, '.
      'password VARCHAR(20) NOT NULL,'.
	  'primary key(username))';
   $retval = mysql_query( $sql_table_studentlogin, $conn );
   if(! $retval ) {
      die('Could not create table "studentlogin" : ' . mysql_error());
   }
?>