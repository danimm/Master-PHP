create table if not exists spar_team;

use spar_team;

create table if not exists users(
    id int(255) auto_increment not null,
    name varchar(50) not null,
    surname varchar(100) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    initials varchar(20) not null,
    region varchar(20),
    role varchar(20) default 'user',
    phone varchar(50),
    adress varchar(255),
    postcode int(10),
    place varchar(50),
    image varchar(100),
    remember_token varchar(255),
    created_at datetime default null,
    updated_at datetime default null,
    constraint pk_users primary key(id)
)engine=InnoDB;

create table if not exists inventurs(
    id int(255) auto_increment not null,
    name varchar(255) not null,
    adress varchar(255),
    date date,
    description text,
    created_at datetime,
    updated_at datetime,
    constraint pk_inventur primary key(id)
)engine=InnoDB;

create table if not exists catmans(
    id int(255) auto_increment not null,
    name varchar(255) not null,
    adress varchar(255),
    date date not null,
    description text,
    created_at datetime,
    updated_at datetime,
    constraint pk_catman primary key(id)
)engine=InnoDB;

create table if not exists inventur_anmeldungs(
    id int(255) auto_increment not null,
    user_id int(255) not null,
    inventur_id int(255) not null,
    created_at datetime,
    updated_at datetime,
    constraint pk_inventur_anmeldungs primary key(id),
    constraint fk_inventur_anmeldungs_users foreign key(user_id) references users(id),
    constraint fk_inventur_anmeldungs_inventurs foreign key(inventur_id) references inventurs(id)
)engine=InnoDB;

create table if not exists inventur_stundens(
    id int(255) auto_increment not null,
    user_id int(255) not null,
    inventur_id int(255) not null,
    content varchar(255) not null,
    sended varchar(20),
    created_at datetime,
    updated_at datetime,
    constraint pk_inventur_stundens primary key(id),
    constraint fk_inventur_stundens_users foreign key(user_id) references users(id),
    constraint fk_inventur_stundens_inventurs foreign key(inventur_id) references inventurs(id)
)engine=InnoDB;

create table if not exists catman_anmeldungs(
    id int(255) auto_increment not null,
    user_id int(255) not null,
    catman_id int(255) not null,
    created_at datetime,
    updated_at datetime,
    constraint pk_catman_anmeldungs primary key(id),
    constraint fk_catman_anmeldungs_users foreign key(user_id) references users(id),
    constraint fk_catman_anmeldungs_catmans foreign key(catman_id) references catmans(id)
)engine=InnoDB;

create table if not exists catman_stundens(
    id int(255) auto_increment not null,
    user_id int(255) not null,
    catman_id int(255) not null,
    content varchar(255) not null,
    sended varchar(20),
    created_at datetime,
    updated_at datetime,
    constraint pk_catman_stundens primary key(id),
    constraint fk_catman_stundens_users foreign key(user_id) references users(id),
    constraint fk_catman_stundens_catmans foreign key(catman_id) references catmans(id)
)engine=InnoDB;

