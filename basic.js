$(function(){
    $("#shBar .SiteHeaderBarItem").hover(function(){
       $(this).find(".SiteHeaderDropPanel").addClass("SiteHeaderBarItemHover").show();
    },
     function(){
         $(this).find(".SiteHeaderDropPanel").removeClass("SiteHeaderBarItemHover").hide();
     });
})

hideAndShowSubmenus = function (eventTarget, eventType) {
    var siteHeaderDropdownLink = getClosestSiteHeaderDropdownLink(eventTarget), current, currentDropPanel, i, ariaHidden;
    if (eventType == 'mouseover' && hasClass(eventTarget, 'SiteHeaderBarLink') && hasClass(siteHeaderBar, 'SiteHeaderBarFocus')) {
        flagMouseOver = true;
        eventTarget.focus();
        return;
    } else if (eventType == 'mouseout') {
        flagMouseOver = false;
    }
    for (i = 0; i < siteHeaderDropdownLinks.length; i++) {
        current = siteHeaderDropdownLinks[i];
        currentDropPanel = siteHeaderDropPanels[i];
        if (current != siteHeaderDropdownLink || eventType == 'blur') {
            removeClass(current, 'SiteHeaderBarItemHover');
            if (current.getElementsByTagName('A')[0] != document.activeElement)
                removeClass(current, 'SiteHeaderBarItemFocus');
            currentDropPanel.setAttribute('aria-hidden', 'true');
            if (eventType == 'focus' || eventType == 'closeall')addClass(currentDropPanel, 'SiteHeaderDropPanelHidden');
        }
        else if (eventType == 'mouseout') {
            ariaHidden = (siteHeaderDropdownLink && document.activeElement && siteHeaderDropdownLink == getClosestSiteHeaderDropdownLink(document.activeElement) && !hasClass(currentDropPanel, 'SiteHeaderDropPanelHidden')) ? 'false' : 'true';
            currentDropPanel.setAttribute('aria-hidden', ariaHidden);
            if (ariaHidden == 'true') {
                removeClass(current, 'SiteHeaderBarItemFocus');
                removeClass(current, 'SiteHeaderBarItemHover');
                addClass(currentDropPanel, 'SiteHeaderDropPanelHidden');
            }
        } else {
            addClass(current, 'SiteHeaderBarItemHover');
            addClass(current, 'SiteHeaderBarItemFocus');
            currentDropPanel.setAttribute('aria-hidden', 'false');
            removeClass(currentDropPanel, 'SiteHeaderDropPanelHidden');
        }
    }
    if (eventType == 'focus') {
        addClass(siteHeaderBar, 'SiteHeaderBarFocus');
        if (hasClass(eventTarget, 'SiteHeaderBarItem') && hasClass(eventTarget, 'SiteHeaderBarLink')) {
            addClass(eventTarget, 'SiteHeaderBarItemFocus');
        }
        flagKeyboardNavigation(true);
    } else if (eventType == 'blur') {
        removeClass(siteHeaderBar, 'SiteHeaderBarFocus');
        if (hasClass(eventTarget, 'SiteHeaderBarItem') && hasClass(eventTarget, 'SiteHeaderBarLink')) {
            removeClass(eventTarget, 'SiteHeaderBarItemFocus');
        }
    }
}