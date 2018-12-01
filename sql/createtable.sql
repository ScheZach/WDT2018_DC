CREATE TABLE IF NOT EXISTS user (
  userId INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS question (
  questionId INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  question TEXT NOT NULL,
  submitDate DATE,
  userId INT(10),
  FOREIGN KEY (userId) REFERENCES user(userId)
);

CREATE TABLE IF NOT EXISTS answer (
  answerId INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  answer TEXT NOT NULL,
  answerDate DATE,
  userId INT(10),
  questionId INT(10),
  FOREIGN KEY (userId) REFERENCES user(userId),
  FOREIGN KEY (questionId) REFERENCES question(questionId)
);
