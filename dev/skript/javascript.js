async function loadFragment(url, placeholderId, templateId) {
    const res = await fetch(url);
    if (!res.ok) {
        console.error("Fragment konnte nicht geladen werden:", url);
        return;
    }
    const text = await res.text();
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = text;
    const template = tempDiv.querySelector(templateId);
    if (template) {
        document.getElementById(placeholderId).appendChild(template.content.cloneNode(true));
    } else {
        console.error("Template nicht gefunden:", templateId);
    }
}

// Header und Footer laden
loadFragment('../fragments/kopfzeile.html', 'header-placeholder');
loadFragment('../includes/footer-fragment.html', 'footer-placeholder', '#footer-template');
