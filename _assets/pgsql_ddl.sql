--
-- Структура таблицы organization
--

CREATE TABLE "organization" (
  id INTEGER PRIMARY KEY,
  display_name VARCHAR(100) NOT NULL,
  ogrn BIGINT DEFAULT NULL UNIQUE,
  oktmo BIGINT DEFAULT NULL UNIQUE
);

-- --------------------------------------------------------

--
-- Структура таблицы user
--

CREATE TABLE "user" (
  id INTEGER PRIMARY KEY,
  organization_id INTEGER DEFAULT NULL,
  firstname VARCHAR(45) NOT NULL,
  lastname VARCHAR(45) NOT NULL,
  middlename VARCHAR(45) NOT NULL,
  birthday date DEFAULT NULL,
  inn BIGINT DEFAULT NULL UNIQUE,
  snils BIGINT DEFAULT NULL UNIQUE,
  CONSTRAINT FK_8D93D64932C8A3DE FOREIGN KEY (organization_id) REFERENCES organization (id)
);

-- --------------------------------------------------------

--
-- Последовательность для таблицы organization
--

CREATE SEQUENCE "organization_seq"
INCREMENT BY 1
START WITH 1
NO MAXVALUE;

-- --------------------------------------------------------

--
-- Последовательность для таблицы user
--

CREATE SEQUENCE "user_seq"
INCREMENT BY 1
START WITH 1
NO MAXVALUE;