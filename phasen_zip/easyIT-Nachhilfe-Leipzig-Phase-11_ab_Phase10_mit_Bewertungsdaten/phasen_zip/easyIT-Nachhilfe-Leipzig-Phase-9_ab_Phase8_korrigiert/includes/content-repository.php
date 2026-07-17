<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

function cms_items(string $type, string $status = 'published', int $limit = 100): array
{
    if (!db_available()) {
        return [];
    }

    $allowedTypes = ['faq', 'review', 'job', 'blog'];
    $allowedStatus = ['draft', 'published', 'archived'];

    if (!in_array($type, $allowedTypes, true) || !in_array($status, $allowedStatus, true)) {
        return [];
    }

    $limit = max(1, min($limit, 500));
    $sql = "SELECT * FROM content_items
            WHERE content_type = :type AND status = :status
            ORDER BY sort_order ASC, published_at DESC, id DESC
            LIMIT {$limit}";
    $stmt = db()->prepare($sql);
    $stmt->execute(['type' => $type, 'status' => $status]);
    return $stmt->fetchAll();
}

function cms_item_by_slug(string $type, string $slug): ?array
{
    if (!db_available()) {
        return null;
    }

    $stmt = db()->prepare(
        'SELECT * FROM content_items
         WHERE content_type = :type AND slug = :slug AND status = "published"
         LIMIT 1'
    );
    $stmt->execute(['type' => $type, 'slug' => $slug]);
    $item = $stmt->fetch();
    return $item ?: null;
}
