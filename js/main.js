(function() {

window.App = {
	Models: {},
	Collections: {},
	Views: {}
};

window.template = function(id) {
	return _.template( $('#' + id).html());

};

App.Models.Task = Backbone.Model.extend({});

App.Collections.Tasks = Backbone.Collection.extend({
	model: App.Models.Task
});

App.Views.Tasks = Backbone.View.extend({
	tagName: 'ul',

	render: function(){
		this.collection.each(this.addOne, this);
		return this;
	},

	addOne: function(task){
		var taskView = new App.Views.Task({model:task});

		this.$el.append(taskView.render().el);
	}
})

App.Views.Task = Backbone.View.extend({
	tagName: 'li',

	events: {
		'click .edit' : 'editTask'
	},

	editTask: function() {
		var newTaskTitle = prompt('What would you like to change the text to?', this.model.get('title'));
		this.model.set('title', newTaskTitle);
	},

	template: template('taskTemplate'),


	render: function() {
		var template = this.template(this.model.toJSON());
		this.$el.html(template);
		return this;
	}
});

window.tasksCollection = new App.Collections.Tasks([
	{
		title: 'go to the store',
		priority: 4
	},
	{
		title: 'go to the mall',
		priority: 3
	},
	{
		title: 'go to work',
		priority: 5
	}
]);

var tasksView = new App.Views.Tasks({ collection: tasksCollection });
$('.tasks').append(tasksView.render().el);

})();