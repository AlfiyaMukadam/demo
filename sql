CREATE TABLE bookdata (
    room_no int NOT NULL,
    d_o_b DATE NOT NULL,
    d_o_l DATE NOT NULL,
    PRIMARY KEY (room_no),
    FOREIGN KEY (room_no) REFERENCES room(room_no)
)