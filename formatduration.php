// formatDuration.php made by https://wreeper.top/
function formatDuration($seconds) {
    $years = floor($seconds / 31104000);
    $seconds %= 31104000;
    $months = floor($seconds / 2592000);
    $seconds %= 2592000;
    $days = floor($seconds / 86400);
    $seconds %= 86400;
    $hours = floor($seconds / 3600);
    $seconds %= 3600;
    $minutes = floor($seconds / 60);
    $remainingSeconds = $seconds % 60;

    $parts = [];

    if ($years > 0) {
        $parts[] = $years . ' year' . ($years > 1 ? 's' : '');
    }

    if ($months > 0) {
        $parts[] = $months . ' month' . ($months > 1 ? 's' : '');
    }

    if ($days > 0) {
        $parts[] = $days . ' day' . ($days > 1 ? 's' : '');
    }

    if ($hours > 0) {
        $parts[] = $hours . ' hour' . ($hours > 1 ? 's' : '');
    }

    if ($minutes > 0) {
        $parts[] = $minutes . ' minute' . ($minutes > 1 ? 's' : '');
    }

    if ($remainingSeconds > 0 || empty($parts)) {
        $parts[] = $remainingSeconds . ' second' . ($remainingSeconds != 1 ? 's' : '');
    }

    return implode(', ', $parts);
}
