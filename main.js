
var CardsListModel = function() {
    var self = this;
    self.allItems = ko.observableArray([
        {addTime: "*", cardid: "*"}
    ]);


    var updateCards = function() {
        $.get("api/cards").done(function(json) {
            var data = JSON.parse(json);
            var cards = data.cards;
            self.allItems.removeAll();
            for (var i in cards) {
                self.allItems.push(cards[i]);
            }
            self.allItems.valueHasMutated();
        }).always(function() {
            setTimeout(updateCards, 1000);
        });
    }
    updateCards();
};

ko.applyBindings(new CardsListModel());