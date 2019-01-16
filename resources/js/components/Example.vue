<template>
    <div class="columns">
          <div class="column">
            <form action="{{route('permissions.store')}}" method="POST">
              {{csrf_field()}}

              <div class="block">
                    <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic Permission</b-radio>
                    <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD Permission</b-radio>
              </div>

             <div class="field" v-if="permissionType == 'basic'">
                <label for="display_name" class="label">Name (Display Name)</label>
                <p class="control">
                  <input type="text" class="input" name="display_name" id="display_name">
                </p>
              </div>

              <div class="field" v-if="permissionType == 'basic'">
                <label for="name" class="label">Slug</label>
                <p class="control">
                  <input type="text" class="input" name="name" id="name">
                </p>
              </div>

              <div class="field" v-if="permissionType == 'basic'">
                <label for="description" class="label">Description</label>
                <p class="control">
                  <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does">
                </p>
              </div>

              <div class="field" v-if="permissionType == 'crud'">
                <label for="resource" class="label">Resource</label>
                <p class="control">
                  <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
                </p>
              </div>

              <div class="columns" v-if="permissionType == 'crud'">
                <div class="column is-one-quarter">
                  <!--<b-checkbox-group v-model="crudSelected">-->
                    <div class="field">
                      <b-checkbox v-model="crudSelected" native-value="create" custom-value="create">Create</b-checkbox>
                    </div>
                    <div class="field">
                      <b-checkbox v-model="crudSelected" native-value="read" custom-value="read">Read</b-checkbox>
                    </div>
                    <div class="field">
                      <b-checkbox v-model="crudSelected" native-value="update"  custom-value="update">Update</b-checkbox>
                    </div>
                    <div class="field">
                      <b-checkbox v-model="crudSelected" native-value="delete"  custom-value="delete">Delete</b-checkbox>
                    </div>
                  <!--</b-checkbox-group>-->
                </div> 

                <input type="hidden" name="crud_selected" :value="crudSelected">

                <div class="column">
                  <table class="table" v-if="resource.length >= 3">
                    <thead>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Description</th>
                    </thead>
                    <tbody>
                      <tr v-for="item in crudSelected" :key="item.id">
                        <td v-text="crudName(item)"></td>
                        <td v-text="crudSlug(item)"></td>
                        <td v-text="crudDescription(item)"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <button class="button is-success">Create Permission</button>
            </form>
          </div>
        </div>
</template>

<script>
export default {
  name: 'Example',
      data: function() {
         return  {
           permissionType: 'crud',
           resource: '',
           crudSelected: ['create', 'read', 'update', 'delete']
         }
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        }
      }
}
</script>
