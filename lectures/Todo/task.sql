CREATE TABLE tasks ( 
task_id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
parent_id INT UNSIGNED NOT NULL DEFAULT 0, 
task VARCHAR(100) NOT NULL, 
date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
date_completed TIMESTAMP, 
PRIMARY KEY (task_id), 
INDEX parent (parent_id), 
INDEX added (date_added), 
INDEX completed (date_completed) 
);