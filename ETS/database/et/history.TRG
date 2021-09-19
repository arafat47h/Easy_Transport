TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger AFTER_HISTORY_INSERT\n    after insert\n    on history\n    for each row\n    begin\n		insert into income(amount)\n        select sum(fare) from history;\n    end'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8_general_ci'
created=163195628141
