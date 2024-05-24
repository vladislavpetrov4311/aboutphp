-- Adminer 4.8.1 PostgreSQL 16.3 (Debian 16.3-1.pgdg120+1) dump

DROP TABLE IF EXISTS "test";
CREATE TABLE "public"."test" (
    "id" integer NOT NULL,
    "body" text NOT NULL
) WITH (oids = false);

INSERT INTO "test" ("id", "body") VALUES
(10,	'my_test');

-- 2024-05-24 14:12:08.516009+00
