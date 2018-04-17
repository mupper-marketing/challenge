json.extract! donation, :id, :donor, :type, :quantity, :created_at, :updated_at
json.url donation_url(donation, format: :json)
