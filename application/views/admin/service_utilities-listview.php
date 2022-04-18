<link href="<?php echo base_url(); ?>backendAssets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>backendAssets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>backendAssets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
    div.content {
        height: 95%;
        overflow-y: scroll
    }
</style><?php if ($this->router->method == "trash") $stat = 2;
        else $stat = 1; ?><div class="content">
    <div class="container">
        <form id="frm-manage" method="post" name="frm-manage">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive"><?php echo getPageNav(); ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 scrollbar"><?php if ($error != '') { ?><div class="alert alert-danger"><?php echo $error; ?></div><?php }
                                                                                                                                if ($this->session->flashdata('success') != '') { ?><div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div><?php } ?><div class="card-box table-responsive">
                        <table cellspacing="0" class="dt-responsive nowrap table table-bordered table-striped" id="datatable-buttons" width="100%">
                            <thead>
                                <tr>
                                    <th data-orderable="false" style="width:18px"></th>
                                    <th>#SR No</th>
                                    <th>Service Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th data-orderable="false" class="noExport">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url(); ?>backendAssets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>backendAssets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>backendAssets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>backendAssets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        table = $("#datatable-buttons").dataTable({
            processing: !0,
            serverSide: !0,
            bDestroy: !0,
            ordering: !1,
            ajax: {
                url: "<?php echo base_url(); ?>myadmin/<?php echo $this->router->fetch_class(); ?>/fetchdata/",
                type: "POST"
            },
            oLanguage: {
                sInfoFiltered: ""
            },
            aaSorting: [
                [1, "desc"]
            ],
            columnDefs: [{
                targets: [0, 5],
                orderable: !1
            }]
        }), $("#datatable-buttons").on("draw.dt", function() {})
    })
</script>