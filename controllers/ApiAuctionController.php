<?php
    namespace App\Controllers;

    use App\Core\ApiController;
    use App\Core\Controller;
    use App\Models\AuctionModel;
    use App\Models\OfferModel;

    class ApiAuctionController extends ApiController {
        public function show($id) {
            $auctionModel = new AuctionModel($this->getDatabaseConnection());
            $auction = $auctionModel->getById($id);

            $offerModel = new OfferModel($this->getDatabaseConnection());
            $lastOfferPrice = $offerModel->getLastOfferPrice($auction);
            $auction->last_offer_price = $lastOfferPrice;

            $this->set('auction', $auction);
        }

    }