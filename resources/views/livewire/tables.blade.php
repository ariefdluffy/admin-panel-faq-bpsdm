    <div class="">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Input FAQ</h6>
                            </div>
                        </div>
                        <form wire:submit="save">
                            <div class="card-body p-3">
                                <div class="col-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nama Pertanyaan</label>
                                    <input type="text" class="form-control" wire:model="nama">
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="input-group input-group-outline my-3">
                                    <textarea wire:model="pertanyaan" class="form-control" rows="5" placeholder="Say a few words about who you are or what you're working on." spellcheck="false"></textarea>
                                    </div>
                                </div>
                             <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Data FAQ</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Pertanyaan</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jawaban</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3">
                                                     <p class="text-xs font-weight-bold mb-0">1.</p>
                                                </div>
                                            </td>
                                            <td>
                                                
                                                <p class="text-xs text-secondary mb-0">Organization</p>
                                            </td>
                                          
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">lorem,...</span>
                                            </td>
                                              <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Publish</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;"
                                                    class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>