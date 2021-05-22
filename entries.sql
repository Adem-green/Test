CREATE TABLE entries
(
    id INT PRIMARY KEY,
    parent_id INT,
    name VARCHAR(20),
    description TEXT,
    created_at DATA TIME,
    updated_at DATA TIME,
    deleted_at DATA TIME
)