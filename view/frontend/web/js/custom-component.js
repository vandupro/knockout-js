
define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
    'use strict';

    function viewModel() {
        var self = this;
        self.newItem = ko.observable('');
        self.test = ko.observable('');

        this.students = ko.observableArray([
            {name: ko.observable('vandu'), showEdit: ko.observable(false)},
            {name: ko.observable('vandu2'), showEdit: ko.observable(false)},
            {name: ko.observable('vand2u'), showEdit: ko.observable(false)},
            {name: ko.observable('vand3u'), showEdit: ko.observable(false)},
            {name: ko.observable('van5du'), showEdit: ko.observable(false)},
        ]);

        this.addNew = function() {
            self.students.push({name: self.newItem()});
            self.newItem('');
        },

        this.editStudent = function() {
            var currentShow = this.showEdit();
            this.showEdit(!currentShow);
        },

        this.saveStudent = function() {
            var str = '#' + this.name();
            self.test(str);
            this.name($(self.test()).val());
        }

        this.removeStudent = function() {
            self.students.remove(this);
        }
    }

    return Component.extend(new viewModel());
});