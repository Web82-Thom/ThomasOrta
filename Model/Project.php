<?php
namespace Model;

class Project
{
    public static function all(): array
    {
        return [
            [
                'slug' => 'webagency',
                'title' => 'WebAgency',
                'excerpt' => 'Site vitrine pour une agence web moderne.',
                'stack' => ['HTML', 'CSS', 'PHP'],
            ],
            [
                'slug' => 'velok31',
                'title' => 'VéloK 31',
                'excerpt' => 'Application de location de vélos à Toulouse.',
                'stack' => ['PHP', 'MySQL', 'JavaScript'],
            ],
            [
                'slug' => 'jeanforteroche',
                'title' => 'Blog Jean Forteroche',
                'excerpt' => 'Blog d’écrivain connecté, développé en PHP et MySQL.',
                'stack' => ['PHP', 'MySQL', 'Bootstrap'],
            ],
            [
                'slug' => 'thomasorta',
                'title' => 'Portfolio Thomas Orta',
                'excerpt' => 'Site vitrine personnel pour présenter mes réalisations.',
                'stack' => ['PHP', 'Tailwind', 'SEO'],
            ],
        ];
    }
}
