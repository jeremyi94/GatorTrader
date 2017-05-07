<?php
class ListingsController extends AppController
{
    /**
     * Action for viewing a listing.
     *
     * @param id The id of the listing to view.
     *
     * @post Set a string for listingName, listingDescription, listingImage, and listingPrice.
     */
    public function view($id)
    {
        $query = $this->items->find();
        $query->where(['user_id' => $id]);
        foreach ($query as $items){
          $this->set('title', $items->title);
          $this->set('price', $items->price);
          $this->set('description',$items->description);
          $this->set('img1',$items->img1);
          $this->set('img1',$items->img2);
          $this->set('img1',$items->img2);
          $this->set('img1',$items->img2);
          
          break;
        }
        $this->render();
    }
    /**
     * Action for searching for a listing.
     *
     * @param query The text to search for.
     * @param category The category to search in. (Not yet implemented.)
     *
     * @post Set an array for results. Each result should be an array containing strings for listingName, listingShortDescription, listingImage, listingPrice, and listingID.
     */
    public function search()
    {
        if (array_key_exists('query',$_GET))
        {
            $query = htmlspecialchars(stripslashes($_GET['query']));
        }
        else    // This allows a category to be searched without a specific search term. (i.e. lists everything in the category.)
        {
            $query = '';
        }
        if (array_key_exists('category', $_GET))
        {
            $category = htmlspecialchars(stripslashes($_GET['category']));
        }
        else
        {
            $category = 'All Categories';
        }
        if ($category == 'All Categories')
        {
            $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%"]);  // Query methods can also be chained!
        }
        else
        {
            $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%", 'Category' => $category]);
        }
    
        $results = array();
        foreach ($queryResults as $result){
          $results[] = ['listingName' => $result->TITLE, 'listingShortDescription' => $result->SHORTDESCRIPTION, 'listingImage' => $result->THUMBNAILS, 'listingPrice' => $result->PRICE, 'listingID' => $result->LISTINGSID];
        }
        $this->set('results',$results);
        $this->render();
    }
}