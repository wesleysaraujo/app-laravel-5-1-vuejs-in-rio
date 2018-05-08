<template>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body p-t-0">
                        <div class="input-group">
                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search" :disabled="!contacts.length">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-effect-ripple btn-primary" :disabled="!contacts.length"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <button class="btn btn-success" @click.prevent="toggleModalActive()">
                                Cadastrar Contato
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" v-if="contacts.length">
            <div class="col-sm-6" v-for="contact in contacts" :key="contact.id">
                <div class="panel">
                    <div class="panel-body p-t-10">
                        <div class="media-main">
                            <a class="pull-left" href="#">
                                <img class="thumb-lg img-circle bx-s" src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                            </a>
                            <div class="pull-right btn-group-sm">
                                <a href="#" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                    <i class="fa fa-close"></i>
                                </a>
                            </div>
                            <div class="info">
                                <h4>{{ contact.name }}</h4>
                                <p class="text-muted">{{ contact.phone }} / {{ contact.email }}</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <ul class="social-links list-inline p-b-10">
                            <li>
                                <a :title="contact.email" data-placement="top" data-toggle="tooltip" class="tooltips" :href="contact.email" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" v-else>
            <div class="col-md-12">
                <h3 class="text-danger">Nenhum contato cadastrado</h3>
            </div>
        </div>
        <div class="modal fade" :class="{ 'show': modalFormActive }" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  props: ['attributes'],
  data () {
    const attributes = JSON.parse(this.attributes)
    const contacts = attributes.contacts
    const urls = attributes.urls

    return {
      contacts: contacts,
      urls: urls,
      titleList: 'Meus contatos',
      modalFormActive: false,
    }
  },
  methods: {
    toggleModalActive () {
      return this.modalFormActive = !this.modalFormActive
    }
  }
}
</script>