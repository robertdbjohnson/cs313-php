SELECT version();
SELECT current_date;
SELECT 2 + 2;
CREATE TABLE weather (
    city            varchar(80),
    temp_lo         int,           -- low temperature
    temp_hi         int,           -- high temperature
    prcp            real,          -- precipitation
    date            date
);
CREATE TABLE cities (
    name            varchar(80),
    location        point
);
DROP TABLE tablename;
INSERT INTO weather VALUES ('San Francisco', 46, 50, 0.25, '1994-11-27');
INSERT INTO cities VALUES ('San Francisco', '(-194.0, 53.0)');
INSERT INTO weather (city, temp_lo, temp_hi, prcp, date)
    VALUES ('San Francisco', 43, 57, 0.0, '1994-11-29');
INSERT INTO weather (date, city, temp_hi, temp_lo)
    VALUES ('1994-11-29', 'Hayward', 54, 37);
COPY weather FROM '/home/user/weather.txt';
SELECT * FROM weather;
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