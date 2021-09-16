TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger BEFORE_POST_DELETE\n    before delete\n    on post\n    for each row\n    begin\n		insert into history(id,location,destination,fare)\n        values (old.user,old.location,old.destination,old.fare);\n    end'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8_general_ci'
created=163180212544
