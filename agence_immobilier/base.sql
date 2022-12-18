CREATE database agence;
create table users(
    idUser serial not null primary key ,
    email varchar(250),
    name varchar(250),
    password text,
    phoneNumber varchar(10),
    admin boolean default false
);
create table type(
    idType serial not null primary key,
    nom varchar(250)
);
create table habitation(
    idHabitation serial not null primary key ,
    idType int not null references type(idType),
    nbrChambre int not null ,
    loyerParJour decimal,
    dateDebut date,
    dateFin date,
    quartier varchar(250),
    description text
);
create table photos(
    idPhoto serial not null primary key ,
    idHabit int not null references habitation(idHabitation),
    pathPhoto varchar(250),
    isExt boolean
);
create table reservation
(
    idReservation serial not null primary key,
    idHabit       int    not null references habitation (idHabitation),
    dateArrive    date,
    dateDepart    date
);

INSERT INTO public.type (idtype, nom) VALUES (DEFAULT, 'maison');
INSERT INTO public.type (idtype, nom) VALUES (DEFAULT, 'studio');

INSERT INTO public.habitation (idhabitation, idtype, nbrchambre, loyerparjour, datedebut, datefin, quartier, description) VALUES (DEFAULT, 1, 4, 503, '2022-12-16', '2022-12-23', 'Ambohijatovo', 'Maison a 4 chambre et avec une douche');
INSERT INTO public.habitation (idhabitation, idtype, nbrchambre, loyerparjour, datedebut, datefin, quartier, description) VALUES (DEFAULT, 1, 3, 100, '2022-12-17', '2022-12-20', 'Analakely', 'Simple maison avec cuisine');
INSERT INTO public.habitation (idhabitation, idtype, nbrchambre, loyerparjour, datedebut, datefin, quartier, description) VALUES (DEFAULT, 1, 7, 200, '2022-12-14', '2022-12-26', 'Ivato', 'Profitez d''une grande maison en famille');
INSERT INTO public.habitation (idhabitation, idtype, nbrchambre, loyerparjour, datedebut, datefin, quartier, description) VALUES (DEFAULT, 1, 5, 150, '2022-12-15', '2022-12-13', 'Isotry', 'Chambre 5');

 UPDATE public.photos SET pathphoto = 'a1.webp' WHERE idphoto = 1;
 UPDATE public.photos SET idhabit = 1, pathphoto = 'a4.webp' WHERE idphoto = 4;
 UPDATE public.photos SET idhabit = 1, pathphoto = 'a3.webp' WHERE idphoto = 3;
 UPDATE public.photos SET idhabit = 1, pathphoto = 'a2.webp' WHERE idphoto = 2;
 UPDATE public.photos SET idhabit = 1, pathphoto = 'a5.webp' WHERE idphoto = 5;
 UPDATE public.photos SET idhabit = 2, pathphoto = 'b1.webp', isext = true WHERE idphoto = 6;
 UPDATE public.photos SET isext = true WHERE idphoto = 1;
 UPDATE public.photos SET idhabit = 2, pathphoto = 'b3.webp', isext = false WHERE idphoto = 8;
 UPDATE public.photos SET idhabit = 2, pathphoto = 'b2.webp', isext = false WHERE idphoto = 7;
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 2, 'b4.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 2, 'b5.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 3, 'c1.webp', true);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 3, 'c2.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 3, 'c3.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 3, 'c4.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 3, 'c5.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 4, 'd1.webp', true);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 4, 'd2.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 4, 'd3.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 4, 'd4.webp', false);
 INSERT INTO public.photos (idphoto, idhabit, pathphoto, isext) VALUES (DEFAULT, 4, 'd5.webp', false);

select count(*) as nombre
                    from reservation r
                    join habitation h on h.idhabitation = r.idhabit
                    where datearrive<='2022-12-20' and '2022-12-20' <= datedepart;
select count(*) nombre
            from reservation r
            join habitation h on h.idhabitation = r.idhabit
            where datearrive<='2022-12-20' and '2022-12-20' <= datedepart;;
update habitation set nbrchambre=3, loyerparjour=1213, datedebut=2022-12-17, datefin=2022-12-19, description=Ok where idhabitation=1;