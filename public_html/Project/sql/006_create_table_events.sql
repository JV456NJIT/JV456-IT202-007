CREATE TABLE events(
    'id'    int auto_increment_not null,
    'api_id'    VARCHAR(10),
    'description'   TEXT,
    'image', TEXT
    'artist', TEXT,
    'location', TEXT,
    'time',TIMESTAMP,
    PRIMARY KEY ('id'),
    UNIQUE KEY ('api_id'),
    UNIQUE KEY ('description')
)