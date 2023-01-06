<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Cours;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cours = new Cours();
        $cours->setName('Collectif');
        $cours->setPresentation(true);
        $cours->setType('collectif');
        $cours->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae reprehenderit, expedita repudiandae ducimus ut quisquam placeat. Sed, quam? Alias voluptatibus facilis cumque placeat velit reprehenderit qui eveniet sequi, illum debitis.');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('Privé');
        $cours->setPresentation(true);
        $cours->setType('prive');
        $cours->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae reprehenderit, expedita repudiandae ducimus ut quisquam placeat. Sed, quam? Alias voluptatibus facilis cumque placeat velit reprehenderit qui eveniet sequi, illum debitis.');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('En ligne');
        $cours->setPresentation(true);
        $cours->setType('en-ligne');
        $cours->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae reprehenderit, expedita repudiandae ducimus ut quisquam placeat. Sed, quam? Alias voluptatibus facilis cumque placeat velit reprehenderit qui eveniet sequi, illum debitis.');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('Atelier');
        $cours->setPresentation(true);
        $cours->setType('atelier');
        $cours->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae reprehenderit, expedita repudiandae ducimus ut quisquam placeat. Sed, quam? Alias voluptatibus facilis cumque placeat velit reprehenderit qui eveniet sequi, illum debitis.');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('Retraite');
        $cours->setPresentation(true);
        $cours->setType('retraite');
        $cours->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae reprehenderit, expedita repudiandae ducimus ut quisquam placeat. Sed, quam? Alias voluptatibus facilis cumque placeat velit reprehenderit qui eveniet sequi, illum debitis.');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $manager->persist($cours);


        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("19:30:00"));
        $cours->setHoraireDeFin(new DateTime("20:30:00"));
        $cours->setType('Collectif');
        $cours->setLieu('Boersh');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $cours->setDay('Mardi');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("10:30:00"));
        $cours->setHoraireDeFin(new DateTime("11:30:00"));
        $cours->setType('Collectif');
        $cours->setLieu('Bischoffsheim');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $cours->setDay('Jeudi');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("20:00:00"));
        $cours->setHoraireDeFin(new DateTime("21:00:00"));
        $cours->setType('Collectif');
        $cours->setLieu('Krautergersheim');
        $cours->setDescription('Groupe complet, si c\'est le seul horaire qui vous arrange, contactez moi');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('');
        $cours->setDay('Jeudi');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("18:30:00"));
        $cours->setHoraireDeFin(new DateTime("20:00:00"));
        $cours->setType('Collectif');
        $cours->setLieu('Rosheim');
        $cours->setDescription('Groupe quasiment complet, si c\'est le seul horaire qui vous arrange, contactez moi');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('');
        $cours->setDay('Vendredi');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("10:00:00"));
        $cours->setHoraireDeFin(new DateTime("11:00:00"));
        $cours->setType('Collectif');
        $cours->setLieu('Bischoffsheim');
        $cours->setDescription('');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('16€');
        $cours->setDay('Dimanche');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime(""));
        $cours->setHoraireDeFin(new DateTime(""));
        $cours->setType('Privé');
        $cours->setLieu('');
        $cours->setDescription('Je me déplace à votre domicile, entreprise, ou autre lieu évènementiel. Je reçois chez moi à Bischoffsheim (jusqu\'à 8 personnes)');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('65€ en solo, 80€ en duo, 120€ en groupe');
        $cours->setDay('Vendredi');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setName('');
        $cours->setHoraireDeDebut(new DateTime("2023/01/14 09:00:00"));
        $cours->setHoraireDeFin(new DateTime("2023/01/14 12:00:00"));
        $cours->setType('Atelier');
        $cours->setLieu('Bischoffsheim');
        $cours->setDescription('Inscription préalable obligatoire. Purifier et équilibrer le corps, le coeur et l\'esprit après les fêtes. Appréhender la nouvelle année en se sentant revigoré(e), fort(e) et aligné(e) avec ses intentions. ');
        $cours->setParticipantMin(0);
        $cours->setParticipantMax(0);
        $cours->setTarif('40€');
        $cours->setDay('');
        $manager->persist($cours);

        $manager->flush();
    }
}
