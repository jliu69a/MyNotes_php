# MyNotes_php

This is the PHP scripts for the MyNotes app, for query, insert, update and delete with the database.  Below are the schema for the tables :


desc my_notes_type;
Field   Type           Null   Key   Default   Extra
------- -------------- ------ ----- --------- ---------------
id      int(5)         NO     PRI   NULL      auto_increment
name    varchar(200)   YES          NULL      


desc my_notes;
Field         Type            Null   Key   Default   Extra 
------------- --------------- ------ ----- --------- ---------------
id            int(5)          NO     PRI   NULL      auto_increment 
title         varchar(200)    YES          NULL      
type_id       int(5)          YES          NULL      
update_date   timestamp(6)    YES          NULL      
content       varchar(5000)   YES          NULL      

