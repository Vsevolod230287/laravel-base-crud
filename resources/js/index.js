let index = new Vue({
    el: '#index',
    data: {
        form: false,
        btnElimina: true,
        id: null
    },
    methods: {
        showForm: function(id) {
            this.id = id;
            this.form = true;
            this.btnElimina = false;

        },
        anulla: function() {
            this.form = false;
            this.btnElimina = true;
            this.id = null;
        }
    }
})
