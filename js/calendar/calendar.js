mobiscroll.setOptions({
    theme: 'ios',
    themeVariant: 'light'
});

var now = new Date(),
    week = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 6);

mobiscroll.datepicker('#demo-mobile-picker-input', {
    controls: ['calendar'],
    select: 'range',
    showRangeLabels: true
});

var instance = mobiscroll.datepicker('#demo-mobile-picker-button', {
    controls: ['calendar'],
    select: 'range',
    showRangeLabels: true,
    showOnClick: false,
    showOnFocus: false,
});

instance.setVal([now, week]);

mobiscroll.datepicker('#demo-mobile-picker-mobiscroll', {
    controls: ['calendar'],
    select: 'range',
    showRangeLabels: true
});

var inlineInst = mobiscroll.datepicker('#demo-mobile-picker-inline', {
    controls: ['calendar'],
    select: 'range',
    showRangeLabels: true,
    display: 'inline',
});

inlineInst.setVal([now, week]);

document
    .getElementById('show-mobile-date-picker')
    .addEventListener('click', function () {
        instance.open();
        return false;
    });