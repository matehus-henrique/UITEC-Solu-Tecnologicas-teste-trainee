--
-- PostgreSQL database cluster dump
--

-- Started on 2023-11-06 10:54:05

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:CkOnfNnDYkCXhfCaJAt4Bg==$lBDvz1575HOrlAtZgVZpYXOP4Yzepd+449unmxFGNSc=:EUvgwfm2k7KHQx9DtN9JI/n8W6qFhrVopDixIZmIQqE=';






-- Completed on 2023-11-06 10:54:05

--
-- PostgreSQL database cluster dump complete
--

