--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.22
-- Dumped by pg_dump version 9.3.22
-- Started on 2021-05-01 18:58:21

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 1 (class 3079 OID 11750)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2130 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 198 (class 1259 OID 96990)
-- Name: answer_has_respondents; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.answer_has_respondents (
    id_answer_respondent integer NOT NULL,
    answer_id integer NOT NULL,
    respondent_id integer NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.answer_has_respondents OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 96988)
-- Name: answer_has_respondents_id_answer_respondent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.answer_has_respondents_id_answer_respondent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.answer_has_respondents_id_answer_respondent_seq OWNER TO postgres;

--
-- TOC entry 2131 (class 0 OID 0)
-- Dependencies: 197
-- Name: answer_has_respondents_id_answer_respondent_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.answer_has_respondents_id_answer_respondent_seq OWNED BY public.answer_has_respondents.id_answer_respondent;


--
-- TOC entry 196 (class 1259 OID 96975)
-- Name: answers; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.answers (
    id_answer integer NOT NULL,
    question_id integer NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    name_answer text
);


ALTER TABLE public.answers OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 96973)
-- Name: answers_id_answer_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.answers_id_answer_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.answers_id_answer_seq OWNER TO postgres;

--
-- TOC entry 2132 (class 0 OID 0)
-- Dependencies: 195
-- Name: answers_id_answer_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.answers_id_answer_seq OWNED BY public.answers.id_answer;


--
-- TOC entry 184 (class 1259 OID 96884)
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 96882)
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- TOC entry 2133 (class 0 OID 0)
-- Dependencies: 183
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 190 (class 1259 OID 96922)
-- Name: form_pages; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.form_pages (
    id_form_page integer NOT NULL,
    form_id integer NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    name_form_page text
);


ALTER TABLE public.form_pages OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 96920)
-- Name: form_pages_id_form_page_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.form_pages_id_form_page_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.form_pages_id_form_page_seq OWNER TO postgres;

--
-- TOC entry 2134 (class 0 OID 0)
-- Dependencies: 189
-- Name: form_pages_id_form_page_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.form_pages_id_form_page_seq OWNED BY public.form_pages.id_form_page;


--
-- TOC entry 188 (class 1259 OID 96909)
-- Name: forms; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.forms (
    id_form integer NOT NULL,
    nom_form text NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.forms OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 96907)
-- Name: forms_id_form_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.forms_id_form_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.forms_id_form_seq OWNER TO postgres;

--
-- TOC entry 2135 (class 0 OID 0)
-- Dependencies: 187
-- Name: forms_id_form_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.forms_id_form_seq OWNED BY public.forms.id_form;


--
-- TOC entry 172 (class 1259 OID 96616)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 96614)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- TOC entry 2136 (class 0 OID 0)
-- Dependencies: 171
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 177 (class 1259 OID 96847)
-- Name: oauth_access_tokens; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.oauth_access_tokens (
    id character varying(100) NOT NULL,
    user_id bigint,
    client_id bigint NOT NULL,
    name character varying(255),
    scopes text,
    revoked boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_access_tokens OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 96838)
-- Name: oauth_auth_codes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.oauth_auth_codes (
    id character varying(100) NOT NULL,
    user_id bigint NOT NULL,
    client_id bigint NOT NULL,
    scopes text,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_auth_codes OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 96864)
-- Name: oauth_clients; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.oauth_clients (
    id bigint NOT NULL,
    user_id bigint,
    name character varying(255) NOT NULL,
    secret character varying(100),
    provider character varying(255),
    redirect text NOT NULL,
    personal_access_client boolean NOT NULL,
    password_client boolean NOT NULL,
    revoked boolean NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_clients OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 96862)
-- Name: oauth_clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.oauth_clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.oauth_clients_id_seq OWNER TO postgres;

--
-- TOC entry 2137 (class 0 OID 0)
-- Dependencies: 179
-- Name: oauth_clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.oauth_clients_id_seq OWNED BY public.oauth_clients.id;


--
-- TOC entry 182 (class 1259 OID 96876)
-- Name: oauth_personal_access_clients; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.oauth_personal_access_clients (
    id bigint NOT NULL,
    client_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_personal_access_clients OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 96874)
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.oauth_personal_access_clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.oauth_personal_access_clients_id_seq OWNER TO postgres;

--
-- TOC entry 2138 (class 0 OID 0)
-- Dependencies: 181
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.oauth_personal_access_clients_id_seq OWNED BY public.oauth_personal_access_clients.id;


--
-- TOC entry 178 (class 1259 OID 96856)
-- Name: oauth_refresh_tokens; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.oauth_refresh_tokens (
    id character varying(100) NOT NULL,
    access_token_id character varying(100) NOT NULL,
    revoked boolean NOT NULL,
    expires_at timestamp(0) without time zone
);


ALTER TABLE public.oauth_refresh_tokens OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 96831)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 96937)
-- Name: questions; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.questions (
    id_question integer NOT NULL,
    questionnaire text NOT NULL,
    form_page_id integer NOT NULL,
    type_question_id integer NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.questions OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 96935)
-- Name: questions_id_question_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.questions_id_question_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.questions_id_question_seq OWNER TO postgres;

--
-- TOC entry 2139 (class 0 OID 0)
-- Dependencies: 191
-- Name: questions_id_question_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.questions_id_question_seq OWNED BY public.questions.id_question;


--
-- TOC entry 194 (class 1259 OID 96960)
-- Name: respondents; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.respondents (
    id_respondent integer NOT NULL,
    form_id integer NOT NULL,
    statut_respond boolean NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.respondents OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 96958)
-- Name: respondents_id_respondent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.respondents_id_respondent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.respondents_id_respondent_seq OWNER TO postgres;

--
-- TOC entry 2140 (class 0 OID 0)
-- Dependencies: 193
-- Name: respondents_id_respondent_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.respondents_id_respondent_seq OWNED BY public.respondents.id_respondent;


--
-- TOC entry 186 (class 1259 OID 96896)
-- Name: type_questions; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.type_questions (
    id_type_question integer NOT NULL,
    nom_type_question text NOT NULL,
    created_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.type_questions OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 96894)
-- Name: type_questions_id_type_question_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.type_questions_id_type_question_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.type_questions_id_type_question_seq OWNER TO postgres;

--
-- TOC entry 2141 (class 0 OID 0)
-- Dependencies: 185
-- Name: type_questions_id_type_question_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.type_questions_id_type_question_seq OWNED BY public.type_questions.id_type_question;


--
-- TOC entry 174 (class 1259 OID 96820)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    activated boolean NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 96818)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 2142 (class 0 OID 0)
-- Dependencies: 173
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 1940 (class 2604 OID 96993)
-- Name: id_answer_respondent; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answer_has_respondents ALTER COLUMN id_answer_respondent SET DEFAULT nextval('public.answer_has_respondents_id_answer_respondent_seq'::regclass);


--
-- TOC entry 1937 (class 2604 OID 96978)
-- Name: id_answer; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answers ALTER COLUMN id_answer SET DEFAULT nextval('public.answers_id_answer_seq'::regclass);


--
-- TOC entry 1920 (class 2604 OID 96887)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 1928 (class 2604 OID 96925)
-- Name: id_form_page; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.form_pages ALTER COLUMN id_form_page SET DEFAULT nextval('public.form_pages_id_form_page_seq'::regclass);


--
-- TOC entry 1925 (class 2604 OID 96912)
-- Name: id_form; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forms ALTER COLUMN id_form SET DEFAULT nextval('public.forms_id_form_seq'::regclass);


--
-- TOC entry 1916 (class 2604 OID 96619)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 1918 (class 2604 OID 96867)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.oauth_clients ALTER COLUMN id SET DEFAULT nextval('public.oauth_clients_id_seq'::regclass);


--
-- TOC entry 1919 (class 2604 OID 96879)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.oauth_personal_access_clients ALTER COLUMN id SET DEFAULT nextval('public.oauth_personal_access_clients_id_seq'::regclass);


--
-- TOC entry 1931 (class 2604 OID 96940)
-- Name: id_question; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.questions ALTER COLUMN id_question SET DEFAULT nextval('public.questions_id_question_seq'::regclass);


--
-- TOC entry 1934 (class 2604 OID 96963)
-- Name: id_respondent; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.respondents ALTER COLUMN id_respondent SET DEFAULT nextval('public.respondents_id_respondent_seq'::regclass);


--
-- TOC entry 1922 (class 2604 OID 96899)
-- Name: id_type_question; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_questions ALTER COLUMN id_type_question SET DEFAULT nextval('public.type_questions_id_type_question_seq'::regclass);


--
-- TOC entry 1917 (class 2604 OID 96823)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 2121 (class 0 OID 96990)
-- Dependencies: 198
-- Data for Name: answer_has_respondents; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2143 (class 0 OID 0)
-- Dependencies: 197
-- Name: answer_has_respondents_id_answer_respondent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.answer_has_respondents_id_answer_respondent_seq', 1, false);


--
-- TOC entry 2119 (class 0 OID 96975)
-- Dependencies: 196
-- Data for Name: answers; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.answers VALUES (1, 2, '2021-05-01 12:58:45', '2021-05-01 12:58:45', 'Developpeur');
INSERT INTO public.answers VALUES (2, 2, '2021-05-01 12:59:42', '2021-05-01 12:59:42', 'Integreteur');
INSERT INTO public.answers VALUES (3, 3, '2021-05-01 13:00:02', '2021-05-01 13:00:02', 'Isotry');
INSERT INTO public.answers VALUES (6, 3, '2021-05-01 13:00:17', '2021-05-01 13:00:17', 'Isoraka');
INSERT INTO public.answers VALUES (7, 4, '2021-05-01 13:00:32', '2021-05-01 13:00:32', 'Toamasina');
INSERT INTO public.answers VALUES (8, 4, '2021-05-01 13:00:42', '2021-05-01 13:00:42', 'Antananarivo');
INSERT INTO public.answers VALUES (9, 4, '2021-05-01 13:00:47', '2021-05-01 13:00:47', 'Toliara');
INSERT INTO public.answers VALUES (10, 5, '2021-05-01 13:00:58', '2021-05-01 13:00:58', 'Oui');
INSERT INTO public.answers VALUES (11, 5, '2021-05-01 13:01:11', '2021-05-01 13:01:11', 'Non');


--
-- TOC entry 2144 (class 0 OID 0)
-- Dependencies: 195
-- Name: answers_id_answer_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.answers_id_answer_seq', 11, true);


--
-- TOC entry 2107 (class 0 OID 96884)
-- Dependencies: 184
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2145 (class 0 OID 0)
-- Dependencies: 183
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 2113 (class 0 OID 96922)
-- Dependencies: 190
-- Data for Name: form_pages; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.form_pages VALUES (1, 1, '2021-05-01 12:32:52', '2021-05-01 12:32:52', 'Page 1');
INSERT INTO public.form_pages VALUES (2, 1, '2021-05-01 12:34:45', '2021-05-01 12:34:45', 'Page2');


--
-- TOC entry 2146 (class 0 OID 0)
-- Dependencies: 189
-- Name: form_pages_id_form_page_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.form_pages_id_form_page_seq', 3, true);


--
-- TOC entry 2111 (class 0 OID 96909)
-- Dependencies: 188
-- Data for Name: forms; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.forms VALUES (1, 'Formulaire de connaissance', '2021-05-01 12:30:13', '2021-05-01 12:30:13');
INSERT INTO public.forms VALUES (2, 'Formulaire de contact', '2021-05-01 12:31:03', '2021-05-01 12:31:03');


--
-- TOC entry 2147 (class 0 OID 0)
-- Dependencies: 187
-- Name: forms_id_form_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.forms_id_form_seq', 2, true);


--
-- TOC entry 2095 (class 0 OID 96616)
-- Dependencies: 172
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.migrations VALUES (16, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations VALUES (17, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations VALUES (18, '2016_06_01_000001_create_oauth_auth_codes_table', 1);
INSERT INTO public.migrations VALUES (19, '2016_06_01_000002_create_oauth_access_tokens_table', 1);
INSERT INTO public.migrations VALUES (20, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1);
INSERT INTO public.migrations VALUES (21, '2016_06_01_000004_create_oauth_clients_table', 1);
INSERT INTO public.migrations VALUES (22, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);
INSERT INTO public.migrations VALUES (23, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO public.migrations VALUES (24, '2021_04_30_214006_add_type_question', 1);
INSERT INTO public.migrations VALUES (25, '2021_04_30_214200_add_form', 1);
INSERT INTO public.migrations VALUES (26, '2021_04_30_214201_add_form_page', 1);
INSERT INTO public.migrations VALUES (27, '2021_04_30_214202_add_question', 1);
INSERT INTO public.migrations VALUES (28, '2021_04_30_215234_add_respondent', 1);
INSERT INTO public.migrations VALUES (29, '2021_04_30_215235_add_answer', 1);
INSERT INTO public.migrations VALUES (30, '2021_05_01_083224_add_answer_has_respondant', 1);


--
-- TOC entry 2148 (class 0 OID 0)
-- Dependencies: 171
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 30, true);


--
-- TOC entry 2100 (class 0 OID 96847)
-- Dependencies: 177
-- Data for Name: oauth_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2099 (class 0 OID 96838)
-- Dependencies: 176
-- Data for Name: oauth_auth_codes; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2103 (class 0 OID 96864)
-- Dependencies: 180
-- Data for Name: oauth_clients; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2149 (class 0 OID 0)
-- Dependencies: 179
-- Name: oauth_clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.oauth_clients_id_seq', 1, false);


--
-- TOC entry 2105 (class 0 OID 96876)
-- Dependencies: 182
-- Data for Name: oauth_personal_access_clients; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2150 (class 0 OID 0)
-- Dependencies: 181
-- Name: oauth_personal_access_clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.oauth_personal_access_clients_id_seq', 1, false);


--
-- TOC entry 2101 (class 0 OID 96856)
-- Dependencies: 178
-- Data for Name: oauth_refresh_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2098 (class 0 OID 96831)
-- Dependencies: 175
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2115 (class 0 OID 96937)
-- Dependencies: 192
-- Data for Name: questions; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.questions VALUES (2, 'Qui suis-je?', 1, 1, '2021-05-01 12:35:08', '2021-05-01 12:35:08');
INSERT INTO public.questions VALUES (5, 'Atteint de covid', 2, 1, '2021-05-01 12:53:05', '2021-05-01 12:53:05');
INSERT INTO public.questions VALUES (4, 'Lieu de Traitement', 1, 2, '2021-05-01 12:52:45', '2021-05-01 12:52:45');
INSERT INTO public.questions VALUES (3, 'Votre lieu de travail?', 2, 1, '2021-05-01 12:35:25', '2021-05-01 12:35:25');


--
-- TOC entry 2151 (class 0 OID 0)
-- Dependencies: 191
-- Name: questions_id_question_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.questions_id_question_seq', 5, true);


--
-- TOC entry 2117 (class 0 OID 96960)
-- Dependencies: 194
-- Data for Name: respondents; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2152 (class 0 OID 0)
-- Dependencies: 193
-- Name: respondents_id_respondent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.respondents_id_respondent_seq', 1, false);


--
-- TOC entry 2109 (class 0 OID 96896)
-- Dependencies: 186
-- Data for Name: type_questions; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.type_questions VALUES (1, 'Choix unique', '2021-05-01 11:50:03', '2021-05-01 11:50:03');
INSERT INTO public.type_questions VALUES (2, 'Choix multiple', '2021-05-01 11:50:03', '2021-05-01 11:50:03');


--
-- TOC entry 2153 (class 0 OID 0)
-- Dependencies: 185
-- Name: type_questions_id_type_question_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.type_questions_id_type_question_seq', 2, true);


--
-- TOC entry 2097 (class 0 OID 96820)
-- Dependencies: 174
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users VALUES (2, 'Rado', 'admin@gmail.com', NULL, '$2y$10$kSBP2/oqeCkbEa7VCyU8Iu92Mn21RrUFYLXZiDL/.ReOw.2V8u/pW', true, NULL, NULL, NULL);


--
-- TOC entry 2154 (class 0 OID 0)
-- Dependencies: 173
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- TOC entry 1979 (class 2606 OID 96997)
-- Name: answer_has_respondents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.answer_has_respondents
    ADD CONSTRAINT answer_has_respondents_pkey PRIMARY KEY (id_answer_respondent);


--
-- TOC entry 1977 (class 2606 OID 96982)
-- Name: answers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_pkey PRIMARY KEY (id_answer);


--
-- TOC entry 1965 (class 2606 OID 96893)
-- Name: failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 1971 (class 2606 OID 96929)
-- Name: form_pages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.form_pages
    ADD CONSTRAINT form_pages_pkey PRIMARY KEY (id_form_page);


--
-- TOC entry 1969 (class 2606 OID 96919)
-- Name: forms_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.forms
    ADD CONSTRAINT forms_pkey PRIMARY KEY (id_form);


--
-- TOC entry 1944 (class 2606 OID 96621)
-- Name: migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 1954 (class 2606 OID 96854)
-- Name: oauth_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.oauth_access_tokens
    ADD CONSTRAINT oauth_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 1951 (class 2606 OID 96845)
-- Name: oauth_auth_codes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.oauth_auth_codes
    ADD CONSTRAINT oauth_auth_codes_pkey PRIMARY KEY (id);


--
-- TOC entry 1960 (class 2606 OID 96872)
-- Name: oauth_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.oauth_clients
    ADD CONSTRAINT oauth_clients_pkey PRIMARY KEY (id);


--
-- TOC entry 1963 (class 2606 OID 96881)
-- Name: oauth_personal_access_clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.oauth_personal_access_clients
    ADD CONSTRAINT oauth_personal_access_clients_pkey PRIMARY KEY (id);


--
-- TOC entry 1958 (class 2606 OID 96860)
-- Name: oauth_refresh_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.oauth_refresh_tokens
    ADD CONSTRAINT oauth_refresh_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 1973 (class 2606 OID 96947)
-- Name: questions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.questions
    ADD CONSTRAINT questions_pkey PRIMARY KEY (id_question);


--
-- TOC entry 1975 (class 2606 OID 96967)
-- Name: respondents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.respondents
    ADD CONSTRAINT respondents_pkey PRIMARY KEY (id_respondent);


--
-- TOC entry 1967 (class 2606 OID 96906)
-- Name: type_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.type_questions
    ADD CONSTRAINT type_questions_pkey PRIMARY KEY (id_type_question);


--
-- TOC entry 1946 (class 2606 OID 96830)
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 1948 (class 2606 OID 96828)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 1955 (class 1259 OID 96855)
-- Name: oauth_access_tokens_user_id_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX oauth_access_tokens_user_id_index ON public.oauth_access_tokens USING btree (user_id);


--
-- TOC entry 1952 (class 1259 OID 96846)
-- Name: oauth_auth_codes_user_id_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX oauth_auth_codes_user_id_index ON public.oauth_auth_codes USING btree (user_id);


--
-- TOC entry 1961 (class 1259 OID 96873)
-- Name: oauth_clients_user_id_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX oauth_clients_user_id_index ON public.oauth_clients USING btree (user_id);


--
-- TOC entry 1956 (class 1259 OID 96861)
-- Name: oauth_refresh_tokens_access_token_id_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX oauth_refresh_tokens_access_token_id_index ON public.oauth_refresh_tokens USING btree (access_token_id);


--
-- TOC entry 1949 (class 1259 OID 96837)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 1984 (class 2606 OID 96983)
-- Name: answer_has_question_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answer_has_question_id FOREIGN KEY (question_id) REFERENCES public.questions(id_question) ON DELETE CASCADE;


--
-- TOC entry 1985 (class 2606 OID 96998)
-- Name: answer_has_respondent_has_answer_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answer_has_respondents
    ADD CONSTRAINT answer_has_respondent_has_answer_id FOREIGN KEY (answer_id) REFERENCES public.answers(id_answer) ON DELETE CASCADE;


--
-- TOC entry 1986 (class 2606 OID 97003)
-- Name: answer_has_respondent_has_respondent_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.answer_has_respondents
    ADD CONSTRAINT answer_has_respondent_has_respondent_id FOREIGN KEY (respondent_id) REFERENCES public.respondents(id_respondent) ON DELETE CASCADE;


--
-- TOC entry 1980 (class 2606 OID 96930)
-- Name: form_page_has_form_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.form_pages
    ADD CONSTRAINT form_page_has_form_id FOREIGN KEY (form_id) REFERENCES public.forms(id_form) ON DELETE CASCADE;


--
-- TOC entry 1981 (class 2606 OID 96948)
-- Name: question_has_form_page_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.questions
    ADD CONSTRAINT question_has_form_page_id FOREIGN KEY (form_page_id) REFERENCES public.form_pages(id_form_page) ON DELETE CASCADE;


--
-- TOC entry 1982 (class 2606 OID 96953)
-- Name: question_has_type_question_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.questions
    ADD CONSTRAINT question_has_type_question_id FOREIGN KEY (type_question_id) REFERENCES public.type_questions(id_type_question) ON DELETE CASCADE;


--
-- TOC entry 1983 (class 2606 OID 96968)
-- Name: respondent_has_form_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.respondents
    ADD CONSTRAINT respondent_has_form_id FOREIGN KEY (form_id) REFERENCES public.forms(id_form) ON DELETE CASCADE;


--
-- TOC entry 2129 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2021-05-01 18:58:21

--
-- PostgreSQL database dump complete
--

