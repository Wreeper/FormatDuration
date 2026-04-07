// formatDuration.php made by https://wreeper.top/
function formatDuration($seconds) {
    if ($seconds <= 0) return '0 seconds';
    $now = new DateTime();
    $past = clone $now;
    $past->sub(new DateInterval('PT' . $seconds . 'S'));

    // here i let php calculate the difference instead of me
    $diff = $now->diff($past);
    $parts = [];
    if ($diff->y > 0) $parts[] = $diff->y . ' year' . ($diff->y > 1 ? 's' : '');
    if ($diff->m > 0) $parts[] = $diff->m . ' month' . ($diff->m > 1 ? 's' : '');
    if ($diff->d > 0) $parts[] = $diff->d . ' day' . ($diff->d > 1 ? 's' : '');
    if ($diff->h > 0) $parts[] = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '');
    if ($diff->i > 0) $parts[] = $diff->i . ' minute' . ($diff->i > 1 ? 's' : '');

    if ($diff->s > 0 || empty($parts)) {
    $parts[] = $diff->s . ' second' . ($diff->s != 1 ? 's' : '');
    }

    return implode(', ', $parts);
}
