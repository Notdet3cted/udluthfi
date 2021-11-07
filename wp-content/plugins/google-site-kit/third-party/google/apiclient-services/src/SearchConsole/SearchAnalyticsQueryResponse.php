<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\SearchConsole;

class SearchAnalyticsQueryResponse extends \Google\Site_Kit_Dependencies\Google\Collection
{
    protected $collection_key = 'rows';
    public $responseAggregationType;
    protected $rowsType = \Google\Site_Kit_Dependencies\Google\Service\SearchConsole\ApiDataRow::class;
    protected $rowsDataType = 'array';
    public function setResponseAggregationType($responseAggregationType)
    {
        $this->responseAggregationType = $responseAggregationType;
    }
    public function getResponseAggregationType()
    {
        return $this->responseAggregationType;
    }
    /**
     * @param ApiDataRow[]
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    /**
     * @return ApiDataRow[]
     */
    public function getRows()
    {
        return $this->rows;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\SearchConsole\SearchAnalyticsQueryResponse::class, 'Google\\Site_Kit_Dependencies\\Google_Service_SearchConsole_SearchAnalyticsQueryResponse');
