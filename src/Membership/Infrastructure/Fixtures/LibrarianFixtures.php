<?php

namespace App\Membership\Infrastructure\Fixtures;

use App\Membership\Domain\Entity\Librarian;
use App\Shared\Domain\Service\PasswordHasherInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class LibrarianFixtures extends Fixture implements FixtureGroupInterface
{
    public function __construct(private PasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Check if admin already exists (prevents duplicate on re-run)
        $repo = $manager->getRepository(Librarian::class);
        $existingAdmin = $repo->findOneBy(['email' => 'admin@example.com']);

        if ($existingAdmin) {
            echo "✔️ Admin librarian already exists, skipping fixture load.\n";
            return;
        }

        $admin = new Librarian();
        $admin->setFirstName('Admin');
        $admin->setLastName('User');
        $admin->setEmail('admin@example.com');
        $admin->setPhone('9999999999');
        $admin->setHireDate(new \DateTimeImmutable('now'));
        $admin->setPhoto('default-admin.png');
        $admin->setIsActive(true);
        $admin->setIsDeleted(false);

        $hashedPassword = $this->passwordHasher->hash('Admin@123');
        $admin->setPasswordHash($hashedPassword);

        $manager->persist($admin);
        $manager->flush();

        echo "✅ Default admin librarian created: admin@example.com / Admin@123\n";
    }

    public static function getGroups(): array
    {
        return ['librarian'];
    }
}
