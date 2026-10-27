# Replace emojis and broken UTF-8 encoding with professional SVG icons
# for the IronFit Gym website

# SVG Icon replacements
$replacements = @{
    # Muscle/Strength icons
    'ðŸ'ª' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z"/><path d="M6 15h12v6H6z" opacity="0.5"/></svg>'
    '💪' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z"/><path d="M6 15h12v6H6z" opacity="0.5"/></svg>'
    
    # Clipboard/Membership
    'ðŸ…' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9"/><polyline points="9 3 9 7 15 7 15 3"/><polyline points="9 14 19 14"/><polyline points="9 18 19 18"/></svg>'
    
    # Users/People
    'ðŸ'¥' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
    '👥' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
    
    # Weightlifting/Dumbbell
    'ðŸ‹' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="6" cy="6" r="2.5"/><circle cx="18" cy="6" r="2.5"/><rect x="8.5" y="4" width="7" height="4" fill="currentColor"/><rect x="5" y="9" width="14" height="2" fill="currentColor" opacity="0.7"/></svg>'
    '🏋️' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="6" cy="6" r="2.5"/><circle cx="18" cy="6" r="2.5"/><rect x="8.5" y="4" width="7" height="4" fill="currentColor"/><rect x="5" y="9" width="14" height="2" fill="currentColor" opacity="0.7"/></svg>'
    
    # Target/Goal
    'ðŸŽ¯' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="9"/></svg>'
    '🎯' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="9"/></svg>'
    
    # Bell/Notification
    '🔔' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>'
    
    # Calendar
    '📅' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="9" y1="14" x2="9" y2="18"/><line x1="15" y1="14" x2="15" y2="18"/></svg>'
    
    # Graduation/Education
    '🎓' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 6v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V6l-10-4z" opacity="0.3"/><path d="M12 2l10 4v6c0 5.55-3.84 10.74-9 12-5.16-1.26-9-6.45-9-12V6l10-4z"/><polyline points="8 11 11 14 16 9"/></svg>'
    
    # Door/Logout
    '🚪' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>'
    
    # Document/History
    '📜' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="15" y2="17"/></svg>'
    
    # Medal/Award
    '🏅' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="8"/><rect x="11" y="19" width="2" height="4" fill="currentColor"/></svg>'
    
    # Facebook
    'ðŸ"˜' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>'
    
    # Instagram
    'ðŸ"¸' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/></svg>'
    
    # Twitter
    'ðŸ¦' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75 2.25 7-7 7-7z"/></svg>'
    
    # Chat/Message
    'ðŸ'¬' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>'
    
    # Location/Pin
    'ðŸ"' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>'
    
    # Phone
    'ðŸ"ž' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>'
    
    # Clock
    'ðŸ•' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>'
    
    # Cardio/Fire
    'ðŸ"¥' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 1.515a3 3 0 0 0-3 0C7.5 3.467 3 7.121 3 11.972a9 9 0 0 0 15.002 6.126A9.01 9.01 0 0 0 21 11.972c0-4.85-4.5-8.504-7.5-10.457z"/></svg>'
    
    # Yoga/Meditation
    'ðŸ§˜' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="4" r="2"/><path d="M12 8v4M6 14l6-4 6 4v4l-6 2-6-2v-4z" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M8 20h8" stroke="currentColor" stroke-width="1.5"/></svg>'
    
    # Dance/Person
    'ðŸ'ƒ' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="6" r="3"/><path d="M8 10h8l-1 4 1 8H7l1-8-1-4z"/><path d="M16 10l2 2-1 4 2 6M8 10L6 12l1 4-2 6"/></svg>'
    
    # Martial Arts/Fist
    'ðŸ¥Š' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="10" r="2"/><path d="M12 4v4m0 8v4M8 12H4m12 0h4"/><path d="M8 8l-2.828-2.828M16 8l2.828-2.828M8 16l-2.828 2.828M16 16l2.828 2.828"/></svg>'
    
    # Broken HTML Entities and Arrow
    'â†'' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="5 12 19 12"/><polyline points="12 5 19 12 12 19"/></svg>'
    'â–¸' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>'
    'â–¾' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 9 12 15 6 9"/></svg>'
    'â–¶ï¸' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>'
    'â–¶' = '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"/></svg>'
    
    # Text replacements
    'â€"' = '–'
    'â€"' = '–'
    'â€"' = '—'
    'â€™' = "'"
    'â€œ' = '"'
    'â€' = '"'
    'â€º' = '›'
}

$htmlFiles = Get-ChildItem -File | Where-Object { $_.Extension -in '.html', '.php' }
$totalReplacements = 0
$filesModified = @()

Write-Host "Found $($htmlFiles.Count) HTML files to process.`n"
Write-Host "=" * 70

foreach ($file in $htmlFiles | Sort-Object Name) {
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    $originalContent = $content
    $replacementCount = 0
    
    foreach ($key in $replacements.Keys) {
        $count = ([regex]::Matches($content, [regex]::Escape($key))).Count
        if ($count -gt 0) {
            $content = $content -replace [regex]::Escape($key), $replacements[$key]
            $replacementCount += $count
        }
    }
    
    if ($content -ne $originalContent) {
        Set-Content $file.FullName -Value $content -Encoding UTF8 -NoNewline
        $filesModified += @{ Name = $file.Name; Count = $replacementCount }
        Write-Host ("✓ {0,-30} - {1,3} replacements" -f $file.Name, $replacementCount)
        $totalReplacements += $replacementCount
    }
    else {
        Write-Host ("  {0,-30} - No changes needed" -f $file.Name)
    }
}

Write-Host ("=" * 70)
Write-Host "`nTotal Files Processed: $($htmlFiles.Count)"
Write-Host "Files Modified: $($filesModified.Count)"
Write-Host "Total Replacements Made: $totalReplacements`n"

if ($filesModified.Count -gt 0) {
    Write-Host "Summary of Modified Files:"
    Write-Host ("-" * 70)
    foreach ($mod in $filesModified) {
        Write-Host ("  • {0,-30} {1,3} replacements" -f $mod.Name, $mod.Count)
    }
}
