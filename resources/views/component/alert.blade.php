@props(['type' => 'info', 'message' => ''])

@php
    $bgColors = [
        'success' => '#d4edda',
        'error'   => '#f8d7da',
        'warning' => '#fff3cd',
        'info'    => '#d1ecf1'
    ];

    $borderColors = [
        'success' => '#c3e6cb',
        'error'   => '#f5c6cb',
        'warning' => '#ffeeba',
        'info'    => '#bee5eb'
    ];

    $textColors = [
        'success' => '#155724',
        'error'   => '#721c24',
        'warning' => '#856404',
        'info'    => '#0c5460'
    ];

    $bg = $bgColors[$type] ?? $bgColors['info'];
    $border = $borderColors[$type] ?? $borderColors['info'];
    $text = $textColors[$type] ?? $textColors['info'];
@endphp

<div style="background-color: {{ $bg }}; border: 1px solid {{ $border }}; color: {{ $text }}; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>