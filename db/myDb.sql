SELECT version();
SELECT current_date;
SELECT 2 + 2;

CREATE TABLE appointments (
    id          int,         -- this is a comment
    firstname   varchar(80),    -- this is another comment
    lastname    varchar(80),
    email       varchar(80),
    phone       int,
    date        date,
    time        time
);

INSERT INTO appointments (id, firstname, lastname, email, phone, date, time)
    VALUES (1, 'Robert', 'Johnson', 'rj@gmail.com', 1112223333, '2020-12-20', '02:00:00');

INSERT INTO appointments (id, firstname, lastname, email, phone, date, time)
    VALUES (2, 'Joseph', 'Johnson', 'jj@gmail.com', 1112224444, '2020-09-07', '05:00:00');

SELECT * FROM appointments;

DROP TABLE tablename; -- drop weather and cities sometime
INSERT INTO weather VALUES ('San Francisco', 46, 50, 0.25, '1994-11-27');
INSERT INTO cities VALUES ('San Francisco', '(-194.0, 53.0)');
INSERT INTO weather (city, temp_lo, temp_hi, prcp, date)
    VALUES ('San Francisco', 43, 57, 0.0, '1994-11-29');
INSERT INTO weather (date, city, temp_hi, temp_lo)
    VALUES ('1994-11-29', 'Hayward', 54, 37);
COPY weather FROM '/home/user/weather.txt';
SELECT * FROM appointments;
SELECT city, temp_lo, temp_hi, prcp, date FROM weather;
SELECT city, (temp_hi+temp_lo)/2 AS temp_avg, date FROM weather;
SELECT * FROM weather
    WHERE city = 'San Francisco' AND prcp > 0.0;
SELECT * FROM weather
    ORDER BY city;
SELECT * FROM weather
    ORDER BY city, temp_lo;
SELECT DISTINCT city
    FROM weather;
SELECT DISTINCT city
    FROM weather
    ORDER BY city;
SELECT *
    FROM weather, cities
    WHERE city = name;
SELECT city, temp_lo, temp_hi, prcp, date, location
    FROM weather, cities
    WHERE city = name;
SELECT max(temp_lo) FROM weather;
SELECT city FROM weather
    WHERE temp_lo = (SELECT max(temp_lo) FROM weather);
SELECT city, max(temp_lo)
    FROM weather
    GROUP BY city;