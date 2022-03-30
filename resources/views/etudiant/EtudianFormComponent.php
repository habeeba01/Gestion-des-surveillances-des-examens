<template>
        <form class="form-horizontal" v-on:submit.prevent="onSubmit" id="form">
             <fieldset>		
                 <input type="hidden" name="_method" value="put" v-if="editMethod">	

<div class="form-group row">
            <label for="cne" class="col-sm-2 col-form-label">cne</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="cne" name="cne" v-model="etudian.cne" >
            <p style="color:red;" v-if="errors" >{{errors.cne}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="ni" class="col-sm-2 col-form-label">ni</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="ni" name="ni" v-model="etudian.ni" >
            <p style="color:red;" v-if="errors" >{{errors.ni}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nomet" class="col-sm-2 col-form-label">nomet</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomet" name="nomet" v-model="etudian.nomet" >
            <p style="color:red;" v-if="errors" >{{errors.nomet}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="prenomet" class="col-sm-2 col-form-label">prenomet</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="prenomet" name="prenomet" v-model="etudian.prenomet" >
            <p style="color:red;" v-if="errors" >{{errors.prenomet}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="emailet" class="col-sm-2 col-form-label">emailet</label>
            <div class="col-sm-10">
            <input type="email"  class="form-control" id="emailet" name="emailet" v-model="etudian.emailet" >
            <p style="color:red;" v-if="errors" >{{errors.emailet}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="nomdep" class="col-sm-2 col-form-label">nomdep</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="nomdep" name="nomdep" v-model="etudian.nomdep" >
            <p style="color:red;" v-if="errors" >{{errors.nomdep}}</p>
            </div>
        </div>
        

<div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
            <input type="password"  class="form-control" id="password" name="password" v-model="etudian.password" >
            <p style="color:red;" v-if="errors" >{{errors.password}}</p>
            </div>
        </div>
        	
        <input type='hidden' name='_token' :value='token' />

        <button class='btn btn-primary'  @click='addEtudian()' name='save'>Save</button>

        </fieldset>
  
    </form>
</template>


<script>
    export default {
    props:[
        'editMethod',
        'oldEtudian'
    ],
    mounted() {
        console.log('etudianForm mounted.');
        if(this.editMethod)
            this.client = this.oldClient;
        },

    data()
    {
        return {
            token: $('meta[name="csrf-token"]').attr('content'),
            etudian : {
                
				cne : '',
				ni : '',
				nomet : '',
				prenomet : '',
				emailet : '',
				nomdep : '',
				password : '',
            },
            errors: '',
            }
        },
        created()
        {
        
        },
    methods: {
        addEtudian()
        {   
            var url = 'http://localhost:8000/api/etudiant/';
            var type = 'post';
            if(this.editMethod) {url+=this.etudian.cne;type='put'}
            $.ajax({
                url: url,
                type: type,
                datatype: 'json',
                data : $("#form").serialize(),
                success: function(data){
                    console.log(data);
                },
                error: function (request, status, error) {
                    console.log(request);
                    console.log(error);
                    this.errors = request.responseJSON.errors;
                }.bind(this)

               })
        },
        onSubmit(){}
        },
       
        
       
    }
</script>
        